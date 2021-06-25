<?php

namespace Inktweb\Bolcom\RetailerApi\Development;

class Config
{
    public const API_SPEC_GLOB_PATTERN = __DIR__ . '/../resources/api-spec/*.json';

    public const ROOT_PATH = __DIR__ . '/../../src';
    public const ROOT_NAMESPACE = 'Inktweb\\Bolcom\\RetailerApi';

    public const CLIENTS_PATH = self::ROOT_PATH . '/Clients';
    public const CLIENTS_NAMESPACE = self::ROOT_NAMESPACE . '\\Clients';

    public const ENDPOINTS_PATH = self::ROOT_PATH . '/Endpoints';
    public const ENDPOINTS_NAMESPACE = self::ROOT_NAMESPACE . '\\Endpoints';

    public const MODELS_PATH = self::ROOT_PATH . '/Models';
    public const MODELS_NAMESPACE = self::ROOT_NAMESPACE . '\\Models';

    public const VERSION_PREFIX = 'V';
}
