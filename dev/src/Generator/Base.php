<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use ArrayIterator;
use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\GetClassName;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Base\Uses;
use Nette\IOException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;
use Nette\Utils\FileSystem;

abstract class Base
{
    use GetClassName;

    protected const BASE_PATH = __DIR__;
    protected const BASE_NAMESPACE = self::class;
    protected const DEFAULT_CONTENT_TYPE_TEMPLATE = 'application/vnd.retailer.{version}+json';

    /** @var string */
    protected $directory;

    /** @var string */
    protected $namespace;

    /** @var string */
    protected $defaultContentType;

    /** @var Uses */
    protected $uses;

    /** @var ClassType[] */
    protected $classes = [];

    public function __construct(string $apiVersion, ?array $data)
    {
        $this->directory = static::BASE_PATH . DIRECTORY_SEPARATOR . $apiVersion;
        $this->namespace = static::BASE_NAMESPACE . '\\' . $apiVersion;
        $this->defaultContentType = Str::replace(
            '{version}',
            Str::lower($apiVersion),
            static::DEFAULT_CONTENT_TYPE_TEMPLATE
        );
        $this->uses = new Uses();
        $this->classes = $this->process($data);
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->classes);
    }

    public function getClass(string $index): ?ClassType
    {
        return $this->classes[$index] ?? null;
    }

    public function getFullyQualifiedClassName(string $className): string
    {
        return "{$this->namespace}\\{$className}";
    }

    protected function wrapText(?string $text, int $maxLength = 65, int $threshold = 5): ?string
    {
        if ($text === null) {
            return null;
        }

        if (!trim($text)) {
            return '';
        }

        $spacedText = preg_split('/[\s]+/u', $text, -1, PREG_SPLIT_NO_EMPTY);

        return implode(
            "\n",
            array_reduce(
                $spacedText,
                function (array $wrapped, string $word) use ($maxLength, $threshold) {
                    if (empty($wrapped)) {
                        return [$word];
                    }

                    $currentLine = &$wrapped[count($wrapped) - 1];
                    if ((Str::length($currentLine) + Str::length($word)) < ($maxLength + $threshold)) {
                        $currentLine .= ' ' . $word;
                        return $wrapped;
                    }

                    $wrapped[] = $word;
                    return $wrapped;
                },
                []
            )
        );
    }

    public function write(): void
    {
        $this->prepareDirectory($this->directory);

        foreach ($this->classes as $class) {
            $file = (new PhpFile())
                ->addComment($this->wrapText('This file is auto-generated by ' . static::class));

            $namespace = $file->addNamespace($this->namespace);
            $namespace->add($class);

            foreach ($this->uses->all($class->getName(), $class->getName()) as $className => $alias) {
                $namespace->addUse($className, $alias);
            }

            FileSystem::write(
                $this->directory . DIRECTORY_SEPARATOR . $class->getName() . '.php',
                $this->removeUnnecessaryQualifiers(
                    $namespace->getUses(),
                    (new PsrPrinter())->printFile($file)
                )
            );
        }
    }

    protected function removeUnnecessaryQualifiers(array $uses, string $sourceCode): string
    {
        foreach ($uses as $alias => $class) {
            $sourceCode = preg_replace('#\\\\' . preg_quote($class, '#') . '(\W)#', "{$alias}\$1", $sourceCode);
        }

        return $sourceCode;
    }

    protected function prepareDirectory(string $directory): void
    {
        try {
            FileSystem::delete($directory);
        } catch (IOException $e) {
            // do nothing
        }

        FileSystem::createDir($directory);
    }

    abstract protected function process(?array $data): array;
}
