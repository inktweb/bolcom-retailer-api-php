<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

use Generator as BaseGenerator;
use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\FileReadException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\JsonDecodeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingDefinitionsException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingVersionException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\ReferenceNotFoundException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedDefinitionTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedPropertyTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedVersionException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Property;
use Nette\PhpGenerator\PsrPrinter;
use Nette\PhpGenerator\Type;
use Symfony\Component\Filesystem\Filesystem;

class Generator
{
    public static function generate(): void
    {
        (new static())->start();
    }

    public function start(): void
    {
        foreach ($this->getApiSpec() as $apiSpec) {
            $this->process($apiSpec);
        }
    }

    protected function getApiSpec(): BaseGenerator
    {
        $files = glob(Config::API_SPEC_PATH);

        foreach ($files as $file) {
            $contents = @file_get_contents($file);
            if ($contents === false) {
                throw new FileReadException("The file '{$file}' could not be read.");
            }

            $data = @json_decode($contents, true);
            if ($data === null) {
                throw new JsonDecodeException("The file '{$file}' could not be decoded.");
            }

            yield $data;
        }
    }

    protected function process(array $apiSpec): void
    {
        $this->checkSwaggerVersion($apiSpec['swagger'] ?? null);

        $apiVersion = $this->getApiVersion($apiSpec['info']['version'] ?? null);

        $models = $this->processDefinitions($apiSpec['definitions'] ?? null);
        $this->writeModels($models, $apiVersion);

        // todo: generate endpoints
    }

    protected function checkSwaggerVersion(?string $version): void
    {
        if ($version === null) {
            throw new MissingVersionException("No Swagger version found");
        }

        if ($version !== '2.0') {
            throw new UnsupportedVersionException("Unsupported Swagger version: '{$version}'");
        }
    }

    protected function getApiVersion(?int $version): string
    {
        if (!$version) {
            throw new MissingVersionException("No API version found");
        }

        return Config::VERSION_PREFIX . $version;
    }

    protected function processDefinitions(?array $definitions): array
    {
        if ($definitions === null) {
            throw new MissingDefinitionsException();
        }

        $classes = [];
        $deferredProperties = [];

        foreach ($definitions as $name => $definition) {
            $key = "#/definitions/$name";

            if ($definition['type'] !== 'object') {
                throw new UnsupportedDefinitionTypeException(
                    "The definition type '{$definition['type']}' is not supported."
                );
            }

            $className = $this->getClassName($name);
            $class = (new ClassType($className))
                ->setFinal()
                ->setComment($definition['description'] ?? null)
                ->addImplement(Model::class);

            $deferredProperties = array_merge(
                $deferredProperties,
                $this->addProperties($class, $definition['properties'], $definition['required'] ?? [])
            );

            $classes[$key] = $class;
        }

        $this->processDeferredProperties($deferredProperties, $classes);

        return $classes;
    }

    protected function getClassName(string $name): string
    {
        return Str::studly(preg_replace('/\W/', ' ', $name));
    }

    protected function addProperties(ClassType $class, array $properties, array $required): array
    {
        $deferredProperties = [];

        foreach ($properties as $name => $property) {
            $classProperty = $class->addProperty($name)
                ->setProtected()
                ->addComment($property['description'] ?? '');

            $methodName = Str::ucfirst($name);
            $propertySetter = $class->addMethod("set{$methodName}")
                ->setPublic()
                ->setReturnType(Type::SELF)
                ->addBody("\$this->{$name} = \${$name};")
                ->addBody('return $this;');

            $propertyGetter = $class->addMethod("get{$methodName}")
                ->setPublic()
                ->addBody("return \$this->{$name};");

            $parameter = $propertySetter->addParameter($name)
                ->setNullable(!in_array($name, $required));

            $propertyType = $property['type'] ?? null;

            switch ($propertyType) {
                case 'array':
                    $parameter->setType(Type::ARRAY);

                    if (!isset($property['items']['$ref'])) {
                        $classProperty->addComment('@var array');
                        break;
                    }

                    $deferredProperties[] = [
                        'type' => $propertyType,
                        'ref' => $property['items']['$ref'],
                        'property' => $classProperty,
                        'parameter' => $parameter,
                    ];
                    break;
                case 'string':
                    $classProperty->addComment('@var string');
                    $parameter->setType(Type::STRING);
                    break;
                case 'number':
                    $classProperty->addComment('@var float');
                    $parameter->setType(Type::FLOAT);
                    break;
                case 'integer':
                    $classProperty->addComment('@var int');
                    $parameter->setType(Type::INT);
                    break;
                case 'boolean':
                    $classProperty->addComment('@var bool');
                    $parameter->setType(Type::BOOL);
                    break;
                case null:
                    // do nothing
                    break;
                default:
                    throw new UnsupportedPropertyTypeException("The property type '{$propertyType}' is not supported.");
            }

            $propertyGetter
                ->setReturnType($parameter->getType())
                ->setReturnNullable($parameter->isNullable());
        }

        return $deferredProperties;
    }

    protected function processDeferredProperties(array $deferredProperties, array $classes): void
    {
        foreach ($deferredProperties as $deferredProperty) {
            /** @var ClassType $class */
            $class = $classes[$deferredProperty['ref']] ?? null;

            if ($class === null) {
                throw new ReferenceNotFoundException("The reference '{$deferredProperty['ref']}' could not be found.");
            }

            /** @var string $type */
            $type = $deferredProperty['type'];

            /** @var Property $property */
            $property = $deferredProperty['property'];

            /** @var Parameter $parameter */
            $parameter = $deferredProperty['parameter'];

            switch ($type) {
                case 'array':
                    $property->addComment("@var {$class->getName()}[]");
                    $parameter->setType($class->getName() . ' ...');
                    break;
                default:
                    throw new UnsupportedPropertyTypeException("The deferred property type '{$type}' is not supported.");
            }
        }
    }

    protected function writeModels(array $models, string $apiVersion): void
    {
        $directory = Config::MODELS_PATH . DIRECTORY_SEPARATOR . $apiVersion;
        $filesystem = $this->prepareDirectory($directory);

        foreach ($models as $model) {
            $file = (new PhpFile());
            $file->addComment('This file is auto-generated by ' . self::class);

            $namespace = $file->addNamespace(Config::MODELS_NAMESPACE . '\\' . $apiVersion);
            $namespace->addUse(Model::class);
            $namespace->add($model);

            $filesystem->dumpFile(
                $directory . DIRECTORY_SEPARATOR . $model->getName() . '.php',
                (new PsrPrinter())->printFile($file)
            );
        }
    }

    protected function prepareDirectory(string $directory): Filesystem
    {
        $filesystem = new Filesystem();

        if ($filesystem->exists($directory)) {
            $filesystem->remove($directory);
        }

        $filesystem->mkdir($directory);

        return $filesystem;
    }
}
