<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\Fulfilment;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Method extends Enum
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
