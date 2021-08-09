<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Concerns;

use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingVersionException;

trait GetApiVersion
{
    protected function getApiVersion(?int $version): string
    {
        if (!$version) {
            throw new MissingVersionException("No API version found");
        }

        return Config::VERSION_PREFIX . $version;
    }
}
