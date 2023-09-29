<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

use Inktweb\Bolcom\RetailerApi\Development\Concerns\CheckOpenApiVersion;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\GetApiSpec;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Apis;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Clients;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Enums;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Models;

class Generator
{
    use GetApiSpec;
    use CheckOpenApiVersion;

    public static function generate(): void
    {
        (new static())->start();
    }

    public function start(): void
    {
        foreach ($this->getApiSpec() as $apiSpec) {
            $this->process($apiSpec);
        }
    }

    protected function process(array $apiSpec): void
    {
        $apiVersion = $apiSpec['version'];
        $apis = new Apis($apiVersion);

        foreach ($apiSpec['namespaces'] as $namespace => $spec) {
            $this->checkOpenApiVersion($spec['openapi'] ?? null);

            $modelEnums = new Enums\Models($apiVersion, $namespace, $spec['definitions'] ?? null);
            $models = new Models($apiVersion, $namespace, $spec['definitions'] ?? null, $modelEnums);
            $endpointEnums = new Enums\Endpoints($apiVersion, $namespace, $spec['paths'] ?? null);
            $endpoints = new Endpoints($apiVersion, $namespace, $spec['paths'] ?? null, $models, $endpointEnums);

            $modelEnums->write();
            $models->write();
            $endpointEnums->write();
            $endpoints->write();

            $apis->addEndpoints($namespace, $endpoints);
        }

        $clients = new Clients($apiVersion, $apis);

        $apis->write();
        $clients->write();
    }
}
