<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\PromotionCountryCode;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class CountryCode extends Enum
{
    protected const MAX_ITEMS = 1;
    public const NL = 'NL';
    public const BE = 'BE';

    protected array $allowedValues = ['NL', 'BE'];

    public static function nl(): self
    {
        return (new static())->set(static::NL);
    }

    public function isNl(): bool
    {
        return $this->is(static::NL);
    }

    public static function be(): self
    {
        return (new static())->set(static::BE);
    }

    public function isBe(): bool
    {
        return $this->is(static::BE);
    }
}
