<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\InvalidReplenishmentLine;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Type extends Enum
{
    protected const MAX_ITEMS = 1;
    public const UNKNOWN_FBB_PRODUCT = 'UNKNOWN_FBB_PRODUCT';
    public const UNKNOWN_EAN_INVENTORY_RELATION = 'UNKNOWN_EAN_INVENTORY_RELATION';

    protected $allowedValues = ['UNKNOWN_FBB_PRODUCT', 'UNKNOWN_EAN_INVENTORY_RELATION'];

    public static function unknownFbbProduct(): self
    {
        return (new static())->set(static::UNKNOWN_FBB_PRODUCT);
    }

    public function isUnknownFbbProduct(): bool
    {
        return $this->is(static::UNKNOWN_FBB_PRODUCT);
    }

    public static function unknownEanInventoryRelation(): self
    {
        return (new static())->set(static::UNKNOWN_EAN_INVENTORY_RELATION);
    }

    public function isUnknownEanInventoryRelation(): bool
    {
        return $this->is(static::UNKNOWN_EAN_INVENTORY_RELATION);
    }
}
