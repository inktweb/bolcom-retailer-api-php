<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Nette\PhpGenerator\ClassType;

class Apis extends Base
{
    protected const BASE_PATH = Config::APIS_PATH;
    protected const BASE_NAMESPACE = Config::APIS_NAMESPACE;

    public function __construct(string $apiVersion)
    {
        parent::__construct($apiVersion, null, null);

        $this->uses->add(Contracts\Api::class);
    }

    public function addEndpoints(string $namespace, Endpoints $endpoints): void
    {
        $this->classes[$namespace] = $this->processEndpoints($namespace, $endpoints);
    }

    protected function process(?array $data): array
    {
        return [];
    }

    protected function processEndpoints(string $namespace, Endpoints $endpoints): ClassType
    {
        $this->uses->setCurrentScope($namespace);

        $apiClass = (new ClassType($namespace))
            ->setFinal()
            ->setExtends(Contracts\Api::class);

        foreach ($endpoints->getIterator() as $endpoint) {
            $endpointName = $endpoint->getName();
            $propertyName = Str::camel($endpointName);

            $fullyQualifiedClassName = $endpoints->getFullyQualifiedClassName($endpointName);
            $this->uses->add($fullyQualifiedClassName);

            $apiClass->addProperty($propertyName)
                ->setProtected()
                ->setType($fullyQualifiedClassName);

            $apiClass->addMethod($propertyName)
                ->setPublic()
                ->setReturnType($fullyQualifiedClassName)
                ->setBody(
                    <<<BODY
return \$this->{$propertyName}
    ?? \$this->{$propertyName} = new {$endpointName}(\$this->client);
BODY
                );
        }

        $this->uses->setCurrentScope(null);

        return $apiClass;
    }
}
