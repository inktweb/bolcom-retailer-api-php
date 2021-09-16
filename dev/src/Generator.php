<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

use Inktweb\Bolcom\RetailerApi\Development\Concerns\CheckSwaggerVersion;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\GetApiSpec;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\GetApiVersion;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Clients;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Enums;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Models;

class Generator
{
    use GetApiSpec;
    use CheckSwaggerVersion;
    use GetApiVersion;

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
        $this->checkSwaggerVersion($apiSpec['swagger'] ?? null);

        $apiVersion = $this->getApiVersion($apiSpec['info']['version'] ?? null);

        $modelEnums = new Enums\Models($apiVersion, $apiSpec['definitions'] ?? null);
        $models = new Models($apiVersion, $apiSpec['definitions'] ?? null, $modelEnums);
        $endpointEnums = new Enums\Endpoints($apiVersion, $apiSpec['paths'] ?? null);
        $endpoints = new Endpoints($apiVersion, $apiSpec['paths'] ?? null, $models, $endpointEnums);
        $clients = new Clients($apiVersion, $endpoints);

        $modelEnums->write();
        $models->write();
        $endpointEnums->write();
        $endpoints->write();
        $clients->write();
    }
}
