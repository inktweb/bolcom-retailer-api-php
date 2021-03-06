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
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\Property;
use Nette\PhpGenerator\Type;

class Models extends Base
{
    protected const BASE_PATH = Config::MODELS_PATH;
    protected const BASE_NAMESPACE = Config::MODELS_NAMESPACE;

    /** @var Enums\Models */
    protected $enums;

    public function __construct(string $apiVersion, ?array $data, Enums\Models $enums)
    {
        $this->enums = $enums;

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

            $this->uses->setCurrentScope($className);

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
                    $classProperty->setValue([]);

                    if (!isset($property['items']['$ref'])) {
                        $classProperty->addComment('@var array');
                        break;
                    }

                    $deferredProperties[] = [
                        'type' => $propertyType,
                        'ref' => $property['items']['$ref'],
                        'property' => $classProperty,
                        'parameter' => $parameter,
                        'getter' => $propertyGetter,
                    ];
                    break;
                case 'string':
                    if (isset($property['enum'])) {
                        $type = $this->enums->getEnum($class->getName(), $classProperty->getName());

                        $classProperty->addComment("@var \\{$type}");
                        $parameter->setType($type);

                        $this->uses->add($type);
                        break;
                    }

                    $classProperty
                        ->addComment('@var string')
                        ->setValue('');

                    $parameter->setType(Type::STRING);
                    break;
                case 'number':
                    $classProperty
                        ->addComment('@var float')
                        ->setValue(0);

                    $parameter->setType(Type::FLOAT);
                    break;
                case 'integer':
                    $classProperty
                        ->addComment('@var int')
                        ->setValue(0);

                    $parameter->setType(Type::INT);
                    break;
                case 'boolean':
                    $classProperty
                        ->addComment('@var bool')
                        ->setValue(false);

                    $parameter->setType(Type::BOOL);
                    break;
                case null:
                    if (isset($property['$ref'])) {
                        $deferredProperties[] = [
                            'type' => 'object',
                            'ref' => $property['$ref'],
                            'property' => $classProperty,
                            'parameter' => $parameter,
                            'getter' => $propertyGetter,
                        ];
                    }
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

            /** @var Method $getter */
            $getter = $deferredProperty['getter'];

            switch ($type) {
                case 'object':
                    $property->addComment("@var {$class->getName()}");
                    $parameter->setType(
                        $this->getFullyQualifiedClassName(
                            $class->getName()
                        )
                    );
                    $getter->setReturnType(
                        $this->getFullyQualifiedClassName(
                            $class->getName()
                        )
                    );
                    break;
                case 'array':
                    $property->addComment("@var {$class->getName()}[]");
                    $parameter->setType(
                        $this->getFullyQualifiedClassName(
                            $class->getName()
                        )
                        . ' ...'
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
