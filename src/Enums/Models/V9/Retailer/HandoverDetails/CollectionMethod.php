<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\HandoverDetails;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class CollectionMethod extends Enum
{
    protected const MAX_ITEMS = 1;
    public const DROP_OFF = 'DROP_OFF';
    public const PICK_UP = 'PICK_UP';

    protected array $allowedValues = ['DROP_OFF', 'PICK_UP'];

    public static function dropOff(): self
    {
        return (new static())->set(static::DROP_OFF);
    }

    public function isDropOff(): bool
    {
        return $this->is(static::DROP_OFF);
    }

    public static function pickUp(): self
    {
        return (new static())->set(static::PICK_UP);
    }

    public function isPickUp(): bool
    {
        return $this->is(static::PICK_UP);
    }
}
