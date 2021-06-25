<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator\Base;

use Illuminate\Support\Str;

class Uses
{
    protected $uses = [];

    public function __construct(string ...$className)
    {
        $this->add(...$className);
    }

    public function add(string ...$className): void
    {
        foreach ($className as $name) {
            $basename = $this->getClassBaseName($name);
            $this->uses[$basename][$name] = null;
        }
    }

    public function all(string $className = null): array
    {
        $aliasedClassNames = [];

        foreach ($this->uses as $baseName => $classes) {
            $useAlias = count($classes) > 1;

            foreach ($classes as $class => $dummy) {
                $aliasedClassNames[$class] = ($useAlias || $baseName === $className)
                    ? $baseName . Str::singular($this->getClassDirBaseName($class))
                    : null;
            }
        }

        return $aliasedClassNames;
    }

    protected function getPathifiedClassName(string $className): string
    {
        return str_replace('\\', DIRECTORY_SEPARATOR, $className);
    }

    protected function getClassBaseName(string $className): string
    {
        return basename($this->getPathifiedClassName($className));
    }

    protected function getClassDirBaseName(string $className): string
    {
        return basename(dirname(dirname($this->getPathifiedClassName($className))));
    }
}
