<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingDefinitionsException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\ReferenceNotFoundException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedDefinitionTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedPropertyTypeException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\Property;
use Nette\PhpGenerator\Type;

class Models extends Base
{
    protected const BASE_PATH = Config::MODELS_PATH;
    protected const BASE_NAMESPACE = Config::MODELS_NAMESPACE;

    public function __construct(string $apiVersion, ?array $data)
    {
        parent::__construct($apiVersion, $data);

        $this->uses->setCurrentScope(null);
        $this->uses->add(Model::class);
    }

    protected function process(?array $data): array
    {
        if ($data === null) {
            throw new MissingDefinitionsException();
        }

        $classes = [];
        $deferredProperties = [];

        foreach ($data as $name => $definition) {
            $key = "#/definitions/$name";

            if ($definition['type'] !== 'object') {
                throw new UnsupportedDefinitionTypeException(
                    "The definition type '{$definition['type']}' is not supported."
                );
            }

            $className = $this->getClassName($name);
            $class = (new ClassType($className))
                ->setFinal()
                ->addComment($this->wrapText($definition['description'] ?? ''))
                ->addComment("@method static {$className} fromArray(array \$data)")
                ->addExtend(Model::class);

            $this->uses->setCurrentScope($class);

            $deferredProperties = array_merge(
                $deferredProperties,
                $this->addProperties($class, $definition['properties'], $definition['required'] ?? [])
            );

            $classes[$key] = $class;
        }

        $this->processDeferredProperties($deferredProperties, $classes);

        return $classes;
    }

    protected function addProperties(ClassType $class, array $properties, array $required): array
    {
        $deferredProperties = [];

        foreach ($properties as $name => $property) {
            $classProperty = $class->addProperty($name)
                ->setProtected()
                ->addComment($this->wrapText($property['description'] ?? ''));

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
                        $this->getFullyQualifiedClassName(
                            $class->getName()
                        )
                    );
                    break;
                default:
                    throw new UnsupportedPropertyTypeException(
                        "The deferred property type '{$type}' is not supported."
                    );
            }
        }
    }
}
