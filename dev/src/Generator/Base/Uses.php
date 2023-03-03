<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator\Base;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Development\Config;

class Uses
{
    protected const DEFAULT_SCOPE = 'default';

    protected string $apiVersion;
    protected string $currentScope = self::DEFAULT_SCOPE;
    protected array $uses = [];
    protected array $scopes = [];

    public function __construct(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;
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
        $usedClassNames = [];

        foreach ($this->uses as $baseName => $classes) {
            foreach ($classes as $class => $dummy) {
                if (!$this->inScope($scope, $class)) {
                    continue;
                }

                $usedClassNames[$baseName][] = $class;
            }
        }

        $aliasedClassNames = [];

        foreach ($usedClassNames as $baseName => $classes) {
            $useAlias = count($classes) > 1;

            foreach ($classes as $class) {
                $aliasedClassNames[$class] = ($useAlias || $baseName === $className)
                    ? $this->getAlias($class)
                    : null;
            }
        }

        return $aliasedClassNames;
    }

    protected function removeApiVersionNamespace(string $className): string
    {
        return str_replace('\\' . $this->apiVersion, '', $className);
    }

    protected function getPathifiedClassName(string $className): string
    {
        return str_replace('\\', DIRECTORY_SEPARATOR, $className);
    }

    protected function getClassBaseName(string $className): string
    {
        return basename(
            $this->getPathifiedClassName(
                $this->removeApiVersionNamespace($className)
            )
        );
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

    protected function getAlias(string $class): string
    {
        return Str::singular(
            $this->stripNamespaceSeparator(
                $this->reverseNamespace(
                    $this->removeRootNamespace(
                        $this->removeApiVersionNamespace($class)
                    )
                )
            )
        );
    }

    protected function removeRootNamespace(string $class): string
    {
        return preg_replace('/^' . preg_quote(Config::ROOT_NAMESPACE) . '/', '', $class);
    }

    protected function reverseNamespace(string $class): string
    {
        return implode('\\', array_reverse(explode('\\', $class)));
    }

    protected function stripNamespaceSeparator(string $className): string
    {
        return str_replace('\\', '', $className);
    }
}
