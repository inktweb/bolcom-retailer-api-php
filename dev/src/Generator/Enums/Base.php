<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator\Enums;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts\Enum;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Base as GeneratorBase;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;
use Nette\PhpGenerator\Type;
use Nette\Utils\FileSystem;

abstract class Base extends GeneratorBase
{
    protected const BASE_PATH = Config::ENUMS_PATH;
    protected const BASE_NAMESPACE = Config::ENUMS_NAMESPACE;

    protected array $constantNames = [
        '<=' => 'LESS_THAN_OR_EQUAL_TO',
        '>=' => 'GREATER_THAN_OR_EQUAL_TO',
    ];

    public function __construct(string $apiVersion, string $namespace, ?array $data)
    {
        parent::__construct($apiVersion, $namespace, $data);

        $this->uses->setCurrentScope(null);
        $this->uses->add(Enum::class);
    }

    protected function processEnum(
        string $name,
        array $values,
        int $minItems,
        ?int $maxItems,
        bool $uniqueItems,
        string $collectionFormat
    ): ClassType {
        $enumName = $this->getClassName($name);
        $enum = (new ClassType())
            ->setName($enumName)
            ->addExtend(Enum::class);

        if ($collectionFormat !== Enum\Constants::collectionFormat()) {
            $enum->addConstant('COLLECTION_FORMAT', $collectionFormat)
                ->setProtected();
        }

        if ($minItems !== Enum\Constants::minItems()) {
            $enum->addConstant('MIN_ITEMS', $minItems)
                ->setProtected();
        }

        if ($maxItems !== Enum\Constants::maxItems()) {
            $enum->addConstant('MAX_ITEMS', $maxItems)
                ->setProtected();
        }

        if ($uniqueItems !== Enum\Constants::uniqueItems()) {
            $enum->addConstant('UNIQUE_ITEMS', $uniqueItems)
                ->setProtected();
        }

        foreach ($values as $value) {
            $constantName = $this->getConstantName($value, $enumName);
            $enum->addConstant($constantName, $value)
                ->setPublic();

            $methodName = $this->getMethodName($value, $enumName);
            $enum->addMethod($methodName)
                ->setPublic()
                ->setStatic()
                ->setReturnType(Type::SELF)
                ->setBody("return (new static())->set(static::$constantName);");

            $enum->addMethod('is' . Str::ucfirst($methodName))
                ->setPublic()
                ->setReturnType(Type::BOOL)
                ->setBody("return \$this->is(static::$constantName);");
        }

        $enum->addProperty('allowedValues', $values)
            ->setProtected();

        return $enum;
    }

    public function getEnum(?string $namespace, ?string $name): ?string
    {
        if ($namespace === null || $name === null || !isset($this->classes[$namespace][$name])) {
            return null;
        }

        $class = $this->classes[$namespace][$name];

        return "{$this->namespace}\\{$namespace}\\{$class->getName()}";
    }

    public function write(): void
    {
        $this->prepareDirectory($this->directory);

        foreach ($this->classes as $namespaceName => $classes) {
            $directory = $this->directory . DIRECTORY_SEPARATOR . $namespaceName;
            $this->prepareDirectory($directory);

            foreach ($classes as $class) {
                $file = (new PhpFile())
                    ->addComment($this->wrapText('This file is auto-generated by ' . static::class));

                $namespace = $file->addNamespace("{$this->namespace}\\{$namespaceName}");
                $namespace->add($class);

                foreach ($this->uses->all($class->getName(), $class->getName()) as $className => $alias) {
                    $namespace->addUse($className, $alias);
                }

                FileSystem::write(
                    $directory . DIRECTORY_SEPARATOR . $class->getName() . '.php',
                    $this->removeUnnecessaryQualifiers(
                        $namespace->getUses(),
                        (new PsrPrinter())->printFile($file)
                    )
                );
            }
        }
    }

    protected function getConstantName(string $value, string $enumName): string
    {
        if (isset($this->constantNames[$value])) {
            return $this->constantNames[$value];
        }

        if (preg_match('/^([0-9A-Z_-]+|[a-z]{2}-[A-Z]{2})$/', $value)) {
            $value = Str::lower($value);
        }

        $constantName = Str::upper(
            Str::snake(
                Str::replace(
                    '-',
                    '_',
                    $value
                )
            )
        );

        if ($this->startsWithDigit($constantName)) {
            $constantName = Str::upper(Str::replace('-', '_', Str::slug(Str::snake($enumName) . "_{$value}")));
        }

        return $constantName;
    }

    protected function startsWithDigit(string $constantName): bool
    {
        return ctype_digit(
            substr($constantName, 0, 1)
        );
    }

    protected function getMethodName(string $value, string $enumName): string
    {
        return Str::camel(
            Str::lower(
                $this->getConstantName($value, $enumName)
            )
        );
    }
}
