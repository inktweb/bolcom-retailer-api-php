<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\ReplenishmentLine;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class LineState extends Enum
{
    protected const MAX_ITEMS = 1;
    public const ANNOUNCED = 'ANNOUNCED';
    public const UNANNOUNCED = 'UNANNOUNCED';
    public const UNKNOWN = 'UNKNOWN';

    protected $allowedValues = ['ANNOUNCED', 'UNANNOUNCED', 'UNKNOWN'];

    public static function announced(): self
    {
        return (new static())->set(static::ANNOUNCED);
    }

    public static function unannounced(): self
    {
        return (new static())->set(static::UNANNOUNCED);
    }

    public static function unknown(): self
    {
        return (new static())->set(static::UNKNOWN);
    }
}
