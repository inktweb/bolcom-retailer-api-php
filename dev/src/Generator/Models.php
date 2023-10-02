<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingSchemasException;
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

    protected Enums\Models $enums;

    public function __construct(string $apiVersion, string $namespace, ?array $data, Enums\Models $enums)
    {
        $this->enums = $enums;

        parent::__construct($apiVersion, $namespace, $data);

        $this->uses->setCurrentScope(null);
        $this->uses->add(Model::class);
    }

    /**
     * @throws UnsupportedDefinitionTypeException
     * @throws UnsupportedPropertyTypeException
     * @throws MissingSchemasException
     * @throws ReferenceNotFoundException
     */
    protected function process(?array $data): array
    {
        if ($data === null) {
            throw new MissingSchemasException();
        }

        $classes = [];
        $deferredProperties = [];

        foreach ($data as $name => $definition) {
            $key = "#/components/schemas/$name";

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

    /**
     * @throws UnsupportedPropertyTypeException
     */
    protected function addProperties(ClassType $class, array $properties, array $required): array
    {
        $deferredProperties = [];

        foreach ($properties as $name => $property) {
            $name = Str::camel($name);
            $classProperty = $class->addProperty($name)
                ->setProtected()
                ->addComment($this->wrapText($property['description'] ?? ''))
                ->setNullable(!in_array($name, $required));

            if ($classProperty->isNullable()) {
                $classProperty->setValue(null);
            }

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
                ->setNullable($classProperty->isNullable());

            $propertyType = $property['type'] ?? null;

            switch ($propertyType) {
                case 'array':
                    $parameter->setType(Type::ARRAY);
                    $classProperty->setType(Type::ARRAY);
                    $classProperty->setValue([]);
                    $propertyGetter->setReturnType(Type::ARRAY);

                    if (isset($property['items']['enum'])) {
                        $type = $this->enums->getEnum($class->getName(), $classProperty->getName());

                        $parameter->setType($type);
                        $propertySetter->setVariadic();

                        $this->uses->add($type);
                        break;
                    }

                    if (!isset($property['items']['$ref'])) {
                        break;
                    }

                    $deferredProperties[] = [
                        'type' => $propertyType,
                        'ref' => $property['items']['$ref'],
                        'property' => $classProperty,
                        'parameter' => $parameter,
                        'getter' => $propertyGetter,
                        'setter' => $propertySetter,
                    ];
                    break;
                case 'string':
                    if (isset($property['enum'])) {
                        $type = $this->enums->getEnum($class->getName(), $classProperty->getName());

                        $classProperty->setType($type);
                        $parameter->setType($type);

                        $this->uses->add($type);
                        break;
                    }

                    $classProperty
                        ->setType(Type::STRING)
                        ->setValue('');

                    $parameter->setType(Type::STRING);
                    break;
                case 'number':
                    $classProperty
                        ->setType(Type::FLOAT)
                        ->setValue(0);

                    $parameter->setType(Type::FLOAT);
                    break;
                case 'integer':
                    $classProperty
                        ->setType(Type::INT)
                        ->setValue(0);

                    $parameter->setType(Type::INT);
                    break;
                case 'boolean':
                    $classProperty
                        ->setType(Type::BOOL)
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
                            'setter' => $propertySetter,
                        ];
                    }
                    break;
                default:
                    throw new UnsupportedPropertyTypeException("The property type '{$propertyType}' is not supported.");
            }

            $propertyGetter
                ->setReturnType(
                    $propertySetter->isVariadic()
                        ? $classProperty->getType()
                        : $parameter->getType()
                )
                ->setReturnNullable($parameter->isNullable());
        }

        return $deferredProperties;
    }

    /**
     * @throws ReferenceNotFoundException
     * @throws UnsupportedPropertyTypeException
     */
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

            /** @var Method $setter */
            $setter = $deferredProperty['setter'];

            switch ($type) {
                case 'object':
                    $property->setType(
                        $this->getFullyQualifiedClassName(
                            $class->getName()
                        )
                    );
                    $parameter->setType(
                        $property->getType()
                    );
                    $getter->setReturnType(
                        $property->getType()
                    );
                    break;
                case 'array':
                    $property->addComment("@var {$class->getName()}[]");
                    $property->setType(Type::ARRAY);
                    $parameter->setType(
                        $this->getFullyQualifiedClassName(
                            $class->getName()
                        )
                    );
                    $setter->setVariadic();
                    break;
                default:
                    throw new UnsupportedPropertyTypeException(
                        "The deferred property type '{$type}' is not supported."
                    );
            }
        }
    }
}
