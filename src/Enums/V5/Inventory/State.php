<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\V5\Inventory;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class State extends Enum
{
    public const REGULAR = 'REGULAR';
    public const GRADED = 'GRADED';

    protected $allowedValues = ['REGULAR', 'GRADED'];

    public static function regular(): self
    {
        return (new static())->set(static::REGULAR);
    }

    public static function graded(): self
    {
        return (new static())->set(static::GRADED);
    }
}
