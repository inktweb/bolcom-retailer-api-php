<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\V5\Orders;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class FulfilmentMethod extends Enum
{
    public const FBR = 'FBR';
    public const FBB = 'FBB';

    protected $allowedValues = ['FBR', 'FBB'];

    public static function fbr(): self
    {
        return (new static())->set(static::FBR);
    }

    public static function fbb(): self
    {
        return (new static())->set(static::FBB);
    }
}
