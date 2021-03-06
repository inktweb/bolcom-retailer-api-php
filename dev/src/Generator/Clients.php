<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Contracts\Client;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Nette\PhpGenerator\ClassType;

class Clients extends Base
{
    protected const BASE_PATH = Config::CLIENTS_PATH;
    protected const BASE_NAMESPACE = Config::CLIENTS_NAMESPACE;

    /** @var Endpoints */
    protected $endpoints;

    public function __construct(string $apiVersion, Endpoints $endpoints)
    {
        $this->endpoints = $endpoints;

        parent::__construct($apiVersion, null);

        $this->uses->setCurrentScope(null);
        $this->uses->add(Client::class);
    }

    protected function process(?array $data): array
    {
        $clientClass = (new ClassType('Client'))
            ->setFinal()
            ->addExtend(Client::class);

        $clientClass->addConstant('DEFAULT_CONTENT_TYPE', $this->defaultContentType)
            ->setProtected();

        foreach ($this->endpoints->getIterator() as $endpoint) {
            $endpointName = $endpoint->getName();
            $propertyName = Str::camel($endpointName);

            $fullyQualifiedClassName = $this->endpoints->getFullyQualifiedClassName($endpointName);
            $this->uses->add($fullyQualifiedClassName);

            $clientClass->addProperty($propertyName)
                ->setProtected()
                ->addComment("@var {$endpointName}");

            $clientClass->addMethod($propertyName)
                ->setPublic()
                ->setReturnType($fullyQualifiedClassName)
                ->setBody("return \$this->{$propertyName} ?? \$this->{$propertyName} = new {$endpointName}(\$this);");
        }

        return [$clientClass];
    }
}
