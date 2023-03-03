<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

class Config
{
    public const API_SPEC_DIR_GLOB_PATTERN = __DIR__ . '/../resources/api-spec/v*/';
    public const API_SPEC_FILE_GLOB_PATTERN = '*.json';

    public const ROOT_PATH = __DIR__ . '/../../src';
    public const ROOT_NAMESPACE = 'Inktweb\\Bolcom\\RetailerApi';

    public const CLIENTS_PATH = self::ROOT_PATH . '/Clients';
    public const CLIENTS_NAMESPACE = self::ROOT_NAMESPACE . '\\Clients';

    public const APIS_PATH = self::ROOT_PATH . '/Apis';
    public const APIS_NAMESPACE = self::ROOT_NAMESPACE . '\\Apis';

    public const ENDPOINTS_PATH = self::ROOT_PATH . '/Endpoints';
    public const ENDPOINTS_NAMESPACE = self::ROOT_NAMESPACE . '\\Endpoints';

    public const MODELS_PATH = self::ROOT_PATH . '/Models';
    public const MODELS_NAMESPACE = self::ROOT_NAMESPACE . '\\Models';

    public const ENUMS_PATH = self::ROOT_PATH . '/Enums';
    public const ENUMS_NAMESPACE = self::ROOT_NAMESPACE . '\\Enums';

    public const ENUMS_ENDPOINTS_PATH = self::ENUMS_PATH . '/Endpoints';
    public const ENUMS_ENDPOINTS_NAMESPACE = self::ENUMS_NAMESPACE . '\\Endpoints';

    public const ENUMS_MODELS_PATH = self::ENUMS_PATH . '/Models';
    public const ENUMS_MODELS_NAMESPACE = self::ENUMS_NAMESPACE . '\\Models';

    public const VERSION_PREFIX = 'V';
}
