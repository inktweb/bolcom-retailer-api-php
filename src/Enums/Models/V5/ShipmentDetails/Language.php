<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\ShipmentDetails;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Language extends Enum
{
    protected const MAX_ITEMS = 1;
    public const NL = 'nl';
    public const NL_BE = 'nl-BE';
    public const FR = 'fr';
    public const FR_BE = 'fr-BE';

    protected $allowedValues = ['nl', 'nl-BE', 'fr', 'fr-BE'];

    public static function nl(): self
    {
        return (new static())->set(static::NL);
    }

    public function isNl(): bool
    {
        return $this->is(static::NL);
    }

    public static function nlBe(): self
    {
        return (new static())->set(static::NL_BE);
    }

    public function isNlBe(): bool
    {
        return $this->is(static::NL_BE);
    }

    public static function fr(): self
    {
        return (new static())->set(static::FR);
    }

    public function isFr(): bool
    {
        return $this->is(static::FR);
    }

    public static function frBe(): self
    {
        return (new static())->set(static::FR_BE);
    }

    public function isFrBe(): bool
    {
        return $this->is(static::FR_BE);
    }
}
