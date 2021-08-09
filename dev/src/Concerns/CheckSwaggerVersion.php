<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Concerns;

use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingVersionException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedVersionException;

trait CheckSwaggerVersion
{
    protected function checkSwaggerVersion(?string $version): void
    {
        if ($version === null) {
            throw new MissingVersionException("No Swagger version found");
        }

        if ($version !== '2.0') {
            throw new UnsupportedVersionException("Unsupported Swagger version: '{$version}'");
        }
    }
}
