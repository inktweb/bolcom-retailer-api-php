<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\CreateDeliveryInfo;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class TransporterCode extends Enum
{
    protected const MAX_ITEMS = 1;
    public const POSTNL = 'POSTNL';
    public const DHL = 'DHL';
    public const DPD = 'DPD';
    public const GLS = 'GLS';
    public const UPS = 'UPS';
    public const OTHER = 'OTHER';

    protected array $allowedValues = ['POSTNL', 'DHL', 'DPD', 'GLS', 'UPS', 'OTHER'];

    public static function postnl(): self
    {
        return (new static())->set(static::POSTNL);
    }

    public function isPostnl(): bool
    {
        return $this->is(static::POSTNL);
    }

    public static function dhl(): self
    {
        return (new static())->set(static::DHL);
    }

    public function isDhl(): bool
    {
        return $this->is(static::DHL);
    }

    public static function dpd(): self
    {
        return (new static())->set(static::DPD);
    }

    public function isDpd(): bool
    {
        return $this->is(static::DPD);
    }

    public static function gls(): self
    {
        return (new static())->set(static::GLS);
    }

    public function isGls(): bool
    {
        return $this->is(static::GLS);
    }

    public static function ups(): self
    {
        return (new static())->set(static::UPS);
    }

    public function isUps(): bool
    {
        return $this->is(static::UPS);
    }

    public static function other(): self
    {
        return (new static())->set(static::OTHER);
    }

    public function isOther(): bool
    {
        return $this->is(static::OTHER);
    }
}