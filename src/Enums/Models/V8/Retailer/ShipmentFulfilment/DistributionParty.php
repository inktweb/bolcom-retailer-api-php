<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V8\Retailer\ShipmentFulfilment;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class DistributionParty extends Enum
{
    protected const MAX_ITEMS = 1;
    public const RETAILER = 'RETAILER';
    public const BOL = 'BOL';

    protected array $allowedValues = ['RETAILER', 'BOL'];

    public static function retailer(): self
    {
        return (new static())->set(static::RETAILER);
    }

    public function isRetailer(): bool
    {
        return $this->is(static::RETAILER);
    }

    public static function bol(): self
    {
        return (new static())->set(static::BOL);
    }

    public function isBol(): bool
    {
        return $this->is(static::BOL);
    }
}
