<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

use Generator as BaseGenerator;
use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\FileReadException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\JsonDecodeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingDefinitionsException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingPathsException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingTagException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingValidResponseException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingVersionException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\ReferenceNotFoundException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\TooManyBodyParametersException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\TooManyValidResponsesException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnresolvedTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedDefinitionTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedParameterTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedPropertyTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedVersionException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Property;
use Nette\PhpGenerator\PsrPrinter;
use Nette\PhpGenerator\Type;
use Symfony\Component\Filesystem\Filesystem;

class Generator
{
    /** @var string */
    protected $apiVersion;

    /** @var ClassType[] */
    protected $models;

    /** @var ClassType[] */
    protected $endpoints;

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

        $this->apiVersion = $this->getApiVersion($apiSpec['info']['version'] ?? null);

        $this->models = $this->processDefinitions($apiSpec['definitions'] ?? null);
        $this->writeModels();

        $this->endpoints = $this->processPaths($apiSpec['paths'] ?? null);
        $this->writeEndpoints();
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
            $class = $classes[$deferredProperty['ref']] ?? null;

            if ($class === null) {
                throw new ReferenceNotFoundException("The reference '{$deferredProperty['ref']}' is not found.");
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
                    $parameter->setType(
                        Config::MODELS_NAMESPACE . '\\' . $this->apiVersion . '\\' . $class->getName() . ' ...'
                    );
                    break;
                default:
                    throw new UnsupportedPropertyTypeException(
                        "The deferred property type '{$type}' is not supported."
                    );
            }
        }
    }

    protected function writeModels(): void
    {
        $directory = Config::MODELS_PATH . DIRECTORY_SEPARATOR . $this->apiVersion;
        $filesystem = $this->prepareDirectory($directory);

        foreach ($this->models as $model) {
            $file = (new PhpFile());
            $file->addComment('This file is auto-generated by ' . self::class);

            $namespace = $file->addNamespace(Config::MODELS_NAMESPACE . '\\' . $this->apiVersion);
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

    protected function processPaths(?array $paths): array
    {
        if ($paths === null) {
            throw new MissingPathsException();
        }

        $endpointPaths = $this->groupByEndpoint($paths);
        $endpoints = [];

        foreach ($endpointPaths as $endpoint => $path) {
            $endpoints[] = $this->processEndpoint($endpoint, $path);
        }

        return $endpoints;
    }

    protected function groupByEndpoint(array $paths): array
    {
        $endpoints = [];

        foreach ($paths as $resource => $path) {
            foreach ($path as $method => $data) {
                $tag = $data['tags'][0] ?? null;

                if ($tag === null) {
                    throw new MissingTagException("There is no tag for {$method} {$resource}.");
                }

                $endpoints[$tag][$resource][$method] = $data;
            }
        }

        return $endpoints;
    }

    protected function processEndpoint(string $name, array $path): ClassType
    {
        $endpointName = Str::studly($name);
        $endpoint = new ClassType();

        $endpoint
            ->setFinal()
            ->setName($endpointName)
            ->addImplement(Endpoint::class);

        foreach ($path as $resource => $methodData) {
            foreach ($methodData as $methodVerb => $data) {
                $methodName = Str::camel($data['operationId']);
                $method = $endpoint->addMethod($methodName);

                $method->addComment(rtrim($data['summary'], '.') . '.');
                $method->addComment('');
                $method->addComment($data['description']);

                $this->processParameters($data['parameters'], $method);
                $this->processResponses($data['responses'], $method);

                $method->addBody($this->generateRequestCode($resource, $methodVerb, $data, $method));
            }
        }

        return $endpoint;
    }

    protected function processParameters($parameters, Method $method): void
    {
        usort(
            $parameters,
            function (array $a, array $b) {
                return $b['required'] <=> $a['required'];
            }
        );

        foreach ($parameters as $parameter) {
            $parameterName = Str::camel($parameter['name']);
            $methodParameter = $method
                ->addParameter($parameterName)
                ->setNullable(!$parameter['required'])
                ->setType(
                    $this->resolveType(
                        $parameter['type'] ?? null,
                        $parameter['schema']['$ref'] ?? null
                    )
                );

            if ($methodParameter->isNullable()) {
                $methodParameter->setDefaultValue(null);
            }
        }
    }

    protected function resolveType(?string $type, ?string $ref): string
    {
        if ($type !== null) {
            switch ($type) {
                case 'string':
                    return Type::STRING;
                case 'number':
                    return Type::FLOAT;
                case 'array':
                    return Type::ARRAY;
                case 'integer':
                    return Type::INT;
                case 'boolean':
                    return Type::BOOL;
                default:
                    throw new UnsupportedParameterTypeException("The type '{$type}' is unsupported.");
            }
        }

        if ($ref !== null) {
            return Config::MODELS_NAMESPACE . '\\' . $this->apiVersion . '\\' . $this->getModel($ref)->getName();
        }

        throw new UnresolvedTypeException("Nothing found for type '{$type}' or reference '{$ref}'.");
    }

    protected function getModel(?string $ref): ClassType
    {
        $model = $this->models[$ref] ?? null;

        if ($model === null) {
            throw new ReferenceNotFoundException("The reference '{$ref}' is not found.");
        }

        return $model;
    }

    protected function writeEndpoints(): void
    {
        $directory = Config::ENDPOINTS_PATH . DIRECTORY_SEPARATOR . $this->apiVersion;
        $filesystem = $this->prepareDirectory($directory);

        foreach ($this->endpoints as $endpoint) {
            $file = (new PhpFile());
            $file->addComment('This file is auto-generated by ' . self::class);

            $namespace = $file->addNamespace(Config::ENDPOINTS_NAMESPACE . '\\' . $this->apiVersion);
            $namespace->addUse(Endpoint::class);
            $namespace->add($endpoint);

            $usedClasses = $this->getUsedClasses($endpoint);
            foreach ($usedClasses as $usedClass) {
                $namespace->addUse($usedClass);
            }

            $filesystem->dumpFile(
                $directory . DIRECTORY_SEPARATOR . $endpoint->getName() . '.php',
                (new PsrPrinter())->printFile($file)
            );
        }
    }

    protected function processResponses(array $responses, Method $method): void
    {
        $validResponses = array_filter(
            array_keys($responses),
            function (int $key) {
                return $key >= 200 && $key < 300;
            }
        );

        if (empty($validResponses)) {
            throw new MissingValidResponseException("No valid responses found for method '{$method->getName()}'.");
        }

        if (count($validResponses) > 1) {
            throw new TooManyValidResponsesException(
                "Too many valid responses found for method '{$method->getName()}'."
            );
        }

        $validResponse = $responses[$validResponses[0]];

        try {
            $method->setReturnType(
                $this->resolveType($validResponse['schema']['type'] ?? null, $validResponse['schema']['$ref'] ?? null)
            );
        } catch (UnresolvedTypeException $e) {
            $method->setReturnType(Type::STRING);
        }
    }

    protected function getUsedClasses(ClassType $class): array
    {
        $usedClasses = [];

        foreach ($class->getMethods() as $method) {
            foreach ($method->getParameters() as $parameter) {
                $usedClasses[] = $parameter->getType();
            }

            $usedClasses[] = $method->getReturnType();
        }

        return array_filter(
            $usedClasses,
            function (string $usedClass) {
                return strpos($usedClass, '\\') !== false;
            }
        );
    }

    protected function generateRequestCode(string $resource, string $verb, array $data, Method $method): string
    {
        $sanitizedResource = var_export($resource, true);
        $sanitizedVerb = var_export($verb, true);

        $pathParameters = $this->getParameters('path', $data['parameters']);
        $queryParameters = $this->getParameters('query', $data['parameters']);
        $bodyParameters = $this->getParameters('body', $data['parameters']);

        $requestHeader = var_export($data['consumes'][0] ?? null, true);
        $responseHeader = var_export($data['produces'][0] ?? null, true);

        $returnType = $method->getReturnType();
        if (strpos($returnType, '\\') !== false) {
            $prepend = "new \\$returnType(";
            $append = ")";
        } else {
            $prepend = "($returnType)";
            $append = "";
        }

        return <<<CODE
return {$prepend}
    \$this->request(
        $sanitizedVerb,
        $sanitizedResource,
        $pathParameters,
        $queryParameters,
        $bodyParameters,
        $requestHeader,
        $responseHeader
    )
$append;
CODE;
    }

    protected function getParameters(string $in, array $parameters): string
    {
        $result = [];
        $isBody = $in === 'body';

        foreach ($parameters as $parameter) {
            if ($parameter['in'] !== $in) {
                continue;
            }

            $fieldName = $parameter['name'];
            $paramName = Str::camel($fieldName);

            $result[] = $isBody
                ? "\${$paramName}"
                : "'$fieldName' => \${$paramName}";
        }

        if ($isBody and count($result) > 1) {
            throw new TooManyBodyParametersException();
        }

        return $isBody
            ? $result[0] ?? 'null'
            : '[' . implode(',', $result) . ']';
    }
}
