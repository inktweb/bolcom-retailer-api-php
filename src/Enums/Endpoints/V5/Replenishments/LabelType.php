<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V5\Replenishments;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class LabelType extends Enum
{
    protected const MIN_ITEMS = 1;
    public const WAREHOUSE = 'WAREHOUSE';
    public const TRANSPORT = 'TRANSPORT';

    protected $allowedValues = ['WAREHOUSE', 'TRANSPORT'];

    public static function warehouse(): self
    {
        return (new static())->set(static::WAREHOUSE);
    }

    public static function transport(): self
    {
        return (new static())->set(static::TRANSPORT);
    }
}