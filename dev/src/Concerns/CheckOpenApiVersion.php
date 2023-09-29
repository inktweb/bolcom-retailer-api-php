<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Concerns;

use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingVersionException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedVersionException;

trait CheckOpenApiVersion
{
    protected function checkOpenApiVersion(?string $version): void
    {
        if ($version === null) {
            throw new MissingVersionException("No OpenAPI version found");
        }

        if (version_compare($version, '3.0', '<') || version_compare($version, '4.0', '>=')) {
            throw new UnsupportedVersionException("Unsupported OpenAPI version: '{$version}'");
        }
    }
}
