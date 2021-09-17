<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator\Enums;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingDefinitionsException;

class Models extends Base
{
    protected const BASE_PATH = Config::ENUMS_MODELS_PATH;
    protected const BASE_NAMESPACE = Config::ENUMS_MODELS_NAMESPACE;

    protected function process(?array $data): array
    {
        if ($data === null) {
            throw new MissingDefinitionsException();
        }

        $enums = [];

        foreach ($data as $name => $definition) {
            $type = $definition['type'] ?? null;

            if ($type !== 'object') {
                continue;
            }

            foreach ($definition['properties'] as $fieldName => $fieldData) {
                $namespace = $this->getClassName($name);

                if (!isset($fieldData['enum'])) {
                    continue;
                }

                $required = $fieldData['required'] ?? false;

                $enums[$namespace][$fieldName] = $this->processEnum(
                    $fieldName,
                    $fieldData['enum'],
                    $fieldData['minItems'] ?? ($required ? 1 : 0),
                    $fieldData['maxItems'] ?? ($fieldData['type'] === 'string' ? 1 : null),
                    $fieldData['uniqueItems'] ?? false,
                    $fieldData['collectionFormat'] ?? Enum\Constants::collectionFormat()
                );
            }
        }

        return $enums;
    }
}
