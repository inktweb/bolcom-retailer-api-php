<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\Condition;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Category extends Enum
{
    protected const MAX_ITEMS = 1;
    public const NEW = 'NEW';
    public const SECONDHAND = 'SECONDHAND';

    protected array $allowedValues = ['NEW', 'SECONDHAND'];

    public static function new(): self
    {
        return (new static())->set(static::NEW);
    }

    public function isNew(): bool
    {
        return $this->is(static::NEW);
    }

    public static function secondhand(): self
    {
        return (new static())->set(static::SECONDHAND);
    }

    public function isSecondhand(): bool
    {
        return $this->is(static::SECONDHAND);
    }
}
