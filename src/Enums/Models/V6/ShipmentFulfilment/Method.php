<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V6\ShipmentFulfilment;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Method extends Enum
{
    protected const MAX_ITEMS = 1;
    public const FBR = 'FBR';
    public const FBB = 'FBB';

    protected $allowedValues = ['FBR', 'FBB'];

    public static function fbr(): self
    {
        return (new static())->set(static::FBR);
    }

    public function isFbr(): bool
    {
        return $this->is(static::FBR);
    }

    public static function fbb(): self
    {
        return (new static())->set(static::FBB);
    }

    public function isFbb(): bool
    {
        return $this->is(static::FBB);
    }
}