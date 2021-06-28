<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator\Base;

use Illuminate\Support\Str;

class Uses
{
    protected const DEFAULT_SCOPE = 'default';

    protected $uses = [];

    protected $currentScope = self::DEFAULT_SCOPE;

    protected $scopes = [];

    public function __construct(string ...$className)
    {
        $this->add(...$className);
    }

    public function add(string ...$className): void
    {
        foreach ($className as $name) {
            $basename = $this->getClassBaseName($name);
            $this->uses[$basename][$name] = null;

            $this->scopes[$this->currentScope][$name] = true;
        }
    }

    public function all(string $scope, ?string $className = null): array
    {
        $aliasedClassNames = [];

        foreach ($this->uses as $baseName => $classes) {
            $useAlias = count($classes) > 1;

            foreach ($classes as $class => $dummy) {
                if (!$this->inScope($scope, $class)) {
                    continue;
                }

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

    protected function inScope(string $scope, string $className): bool
    {
        return isset($this->scopes[static::DEFAULT_SCOPE][$className])
            || isset($this->scopes[$scope][$className]);
    }

    public function setCurrentScope(?string $scope): self
    {
        $this->currentScope = $scope ?? static::DEFAULT_SCOPE;
        return $this;
    }
}
