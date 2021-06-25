<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

use Generator as BaseGenerator;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\FileReadException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\JsonDecodeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingVersionException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedVersionException;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Clients;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints;
use Inktweb\Bolcom\RetailerApi\Development\Generator\Models;
use Nette\PhpGenerator\ClassType;

class Generator
{
    /** @var string */
    protected $apiVersion;

    /** @var ClassType[] */
    protected $models;

    /** @var ClassType[] */
    protected $endpoints;

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

    protected function getApiSpec(): BaseGenerator
    {
        $files = glob(Config::API_SPEC_GLOB_PATTERN);

        foreach ($files as $file) {
            $contents = @file_get_contents($file);
            if ($contents === false) {
                throw new FileReadException("The file '{$file}' could not be read.");
            }

            $data = @json_decode($contents, true);
            if ($data === null) {
                throw new JsonDecodeException("The file '{$file}' could not be decoded.");
            }

            yield $data;
        }
    }

    protected function process(array $apiSpec): void
    {
        $this->checkSwaggerVersion($apiSpec['swagger'] ?? null);

        $this->apiVersion = $this->getApiVersion($apiSpec['info']['version'] ?? null);

        $models = new Models($this->apiVersion, $apiSpec['definitions'] ?? null);
        $endpoints = new Endpoints($this->apiVersion, $apiSpec['paths'] ?? null, $models);
        $clients = new Clients($this->apiVersion, $endpoints);

        $models->write();
        $endpoints->write();
        $clients->write();
    }

    protected function checkSwaggerVersion(?string $version): void
    {
        if ($version === null) {
            throw new MissingVersionException("No Swagger version found");
        }

        if ($version !== '2.0') {
            throw new UnsupportedVersionException("Unsupported Swagger version: '{$version}'");
        }
    }

    protected function getApiVersion(?int $version): string
    {
        if (!$version) {
            throw new MissingVersionException("No API version found");
        }

        return Config::VERSION_PREFIX . $version;
    }
}
