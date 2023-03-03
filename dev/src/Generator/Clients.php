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

    protected Apis $apis;

    public function __construct(string $apiVersion, Apis $apis)
    {
        $this->apis = $apis;

        parent::__construct($apiVersion, null, null);

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

        foreach ($this->apis->getIterator() as $api) {
            $apiName = $api->getName();
            $propertyName = Str::camel($apiName);

            $fullyQualifiedClassName = $this->apis->getFullyQualifiedClassName($apiName);
            $this->uses->add($fullyQualifiedClassName);

            $clientClass->addProperty($propertyName)
                ->setProtected()
                ->setType($fullyQualifiedClassName);

            $clientClass->addMethod($propertyName)
                ->setPublic()
                ->setReturnType($fullyQualifiedClassName)
                ->setBody(
                    <<<BODY
return \$this->{$propertyName}
    ?? \$this->{$propertyName} = new {$apiName}(\$this);
BODY
                );
        }

        return [$clientClass];
    }
}
