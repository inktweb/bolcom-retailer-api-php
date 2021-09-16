<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\ChangeTransportRequest;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class TransporterCode extends Enum
{
    public const BRIEFPOST = 'BRIEFPOST';
    public const UPS = 'UPS';
    public const TNT = 'TNT';
    public const TNT_EXTRA = 'TNT-EXTRA';
    public const TNT_BRIEF = 'TNT_BRIEF';
    public const TNT_EXPRESS = 'TNT-EXPRESS';
    public const DYL = 'DYL';
    public const DPD_NL = 'DPD-NL';
    public const DPD_BE = 'DPD-BE';
    public const BPOST_BE = 'BPOST_BE';
    public const BPOST_BRIEF = 'BPOST_BRIEF';
    public const DHLFORYOU = 'DHLFORYOU';
    public const GLS = 'GLS';
    public const FEDEX_NL = 'FEDEX_NL';
    public const FEDEX_BE = 'FEDEX_BE';
    public const OTHER = 'OTHER';
    public const DHL = 'DHL';
    public const DHL_DE = 'DHL_DE';
    public const DHL_GLOBAL_MAIL = 'DHL-GLOBAL-MAIL';
    public const TSN = 'TSN';
    public const FIEGE = 'FIEGE';
    public const TRANSMISSION = 'TRANSMISSION';
    public const PARCEL_NL = 'PARCEL-NL';
    public const LOGOIX = 'LOGOIX';
    public const PACKS = 'PACKS';
    public const COURIER = 'COURIER';
    public const RJP = 'RJP';

    protected $allowedValues = [
        'BRIEFPOST',
        'UPS',
        'TNT',
        'TNT-EXTRA',
        'TNT_BRIEF',
        'TNT-EXPRESS',
        'DYL',
        'DPD-NL',
        'DPD-BE',
        'BPOST_BE',
        'BPOST_BRIEF',
        'DHLFORYOU',
        'GLS',
        'FEDEX_NL',
        'FEDEX_BE',
        'OTHER',
        'DHL',
        'DHL_DE',
        'DHL-GLOBAL-MAIL',
        'TSN',
        'FIEGE',
        'TRANSMISSION',
        'PARCEL-NL',
        'LOGOIX',
        'PACKS',
        'COURIER',
        'RJP',
    ];

    public static function briefpost(): self
    {
        return (new static())->set(static::BRIEFPOST);
    }

    public static function ups(): self
    {
        return (new static())->set(static::UPS);
    }

    public static function tnt(): self
    {
        return (new static())->set(static::TNT);
    }

    public static function tntExtra(): self
    {
        return (new static())->set(static::TNT_EXTRA);
    }

    public static function tntBrief(): self
    {
        return (new static())->set(static::TNT_BRIEF);
    }

    public static function tntExpress(): self
    {
        return (new static())->set(static::TNT_EXPRESS);
    }

    public static function dyl(): self
    {
        return (new static())->set(static::DYL);
    }

    public static function dpdNl(): self
    {
        return (new static())->set(static::DPD_NL);
    }

    public static function dpdBe(): self
    {
        return (new static())->set(static::DPD_BE);
    }

    public static function bpostBe(): self
    {
        return (new static())->set(static::BPOST_BE);
    }

    public static function bpostBrief(): self
    {
        return (new static())->set(static::BPOST_BRIEF);
    }

    public static function dhlforyou(): self
    {
        return (new static())->set(static::DHLFORYOU);
    }

    public static function gls(): self
    {
        return (new static())->set(static::GLS);
    }

    public static function fedexNl(): self
    {
        return (new static())->set(static::FEDEX_NL);
    }

    public static function fedexBe(): self
    {
        return (new static())->set(static::FEDEX_BE);
    }

    public static function other(): self
    {
        return (new static())->set(static::OTHER);
    }

    public static function dhl(): self
    {
        return (new static())->set(static::DHL);
    }

    public static function dhlDe(): self
    {
        return (new static())->set(static::DHL_DE);
    }

    public static function dhlGlobalMail(): self
    {
        return (new static())->set(static::DHL_GLOBAL_MAIL);
    }

    public static function tsn(): self
    {
        return (new static())->set(static::TSN);
    }

    public static function fiege(): self
    {
        return (new static())->set(static::FIEGE);
    }

    public static function transmission(): self
    {
        return (new static())->set(static::TRANSMISSION);
    }

    public static function parcelNl(): self
    {
        return (new static())->set(static::PARCEL_NL);
    }

    public static function logoix(): self
    {
        return (new static())->set(static::LOGOIX);
    }

    public static function packs(): self
    {
        return (new static())->set(static::PACKS);
    }

    public static function courier(): self
    {
        return (new static())->set(static::COURIER);
    }

    public static function rjp(): self
    {
        return (new static())->set(static::RJP);
    }
}