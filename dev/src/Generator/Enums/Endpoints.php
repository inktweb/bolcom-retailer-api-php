<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator\Enums;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingPathsException;

class Endpoints extends Base
{
    protected const BASE_PATH = Config::ENUMS_ENDPOINTS_PATH;
    protected const BASE_NAMESPACE = Config::ENUMS_ENDPOINTS_NAMESPACE;

    protected function process(?array $data): array
    {
        if ($data === null) {
            throw new MissingPathsException();
        }

        $enums = [];

        foreach ($data as $methods) {
            foreach ($methods as $endpoint) {
                if (!isset($endpoint['parameters'])) {
                    continue;
                }

                foreach ($endpoint['parameters'] as $parameter) {
                    $namespace = $this->getClassName($endpoint['tags'][0]);
                    $name = $parameter['name'];
                    $enum = $parameter['enum']
                        ?? $parameter['items']['enum']
                        ?? null;

                    if ($enum === null) {
                        continue;
                    }

                    $enums[$namespace][$name] = $this->processEnum(
                        $name,
                        $enum,
                        $parameter['minItems'] ?? ($parameter['required'] ? 1 : 0),
                        $parameter['maxItems'] ?? null,
                        $parameter['uniqueItems'] ?? false,
                        $parameter['collectionFormat'] ?? Enum\Constants::collectionFormat()
                    );
                }
            }
        }

        return $enums;
    }
}
