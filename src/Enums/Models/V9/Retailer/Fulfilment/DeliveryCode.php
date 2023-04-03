<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\Fulfilment;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class DeliveryCode extends Enum
{
    protected const MAX_ITEMS = 1;
    public const DELIVERY_CODE_24UURS_23 = '24uurs-23';
    public const DELIVERY_CODE_24UURS_22 = '24uurs-22';
    public const DELIVERY_CODE_24UURS_21 = '24uurs-21';
    public const DELIVERY_CODE_24UURS_20 = '24uurs-20';
    public const DELIVERY_CODE_24UURS_19 = '24uurs-19';
    public const DELIVERY_CODE_24UURS_18 = '24uurs-18';
    public const DELIVERY_CODE_24UURS_17 = '24uurs-17';
    public const DELIVERY_CODE_24UURS_16 = '24uurs-16';
    public const DELIVERY_CODE_24UURS_15 = '24uurs-15';
    public const DELIVERY_CODE_24UURS_14 = '24uurs-14';
    public const DELIVERY_CODE_24UURS_13 = '24uurs-13';
    public const DELIVERY_CODE_24UURS_12 = '24uurs-12';
    public const DELIVERY_CODE_1_2D = '1-2d';
    public const DELIVERY_CODE_2_3D = '2-3d';
    public const DELIVERY_CODE_3_5D = '3-5d';
    public const DELIVERY_CODE_4_8D = '4-8d';
    public const DELIVERY_CODE_1_8D = '1-8d';
    public const MIJN_LEVERBELOFTE = 'MijnLeverbelofte';
    public const VVB = 'VVB';

    protected array $allowedValues = [
        '24uurs-23',
        '24uurs-22',
        '24uurs-21',
        '24uurs-20',
        '24uurs-19',
        '24uurs-18',
        '24uurs-17',
        '24uurs-16',
        '24uurs-15',
        '24uurs-14',
        '24uurs-13',
        '24uurs-12',
        '1-2d',
        '2-3d',
        '3-5d',
        '4-8d',
        '1-8d',
        'MijnLeverbelofte',
        'VVB',
    ];

    public static function deliveryCode24uurs23(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_23);
    }

    public function isDeliveryCode24uurs23(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_23);
    }

    public static function deliveryCode24uurs22(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_22);
    }

    public function isDeliveryCode24uurs22(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_22);
    }

    public static function deliveryCode24uurs21(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_21);
    }

    public function isDeliveryCode24uurs21(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_21);
    }

    public static function deliveryCode24uurs20(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_20);
    }

    public function isDeliveryCode24uurs20(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_20);
    }

    public static function deliveryCode24uurs19(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_19);
    }

    public function isDeliveryCode24uurs19(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_19);
    }

    public static function deliveryCode24uurs18(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_18);
    }

    public function isDeliveryCode24uurs18(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_18);
    }

    public static function deliveryCode24uurs17(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_17);
    }

    public function isDeliveryCode24uurs17(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_17);
    }

    public static function deliveryCode24uurs16(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_16);
    }

    public function isDeliveryCode24uurs16(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_16);
    }

    public static function deliveryCode24uurs15(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_15);
    }

    public function isDeliveryCode24uurs15(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_15);
    }

    public static function deliveryCode24uurs14(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_14);
    }

    public function isDeliveryCode24uurs14(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_14);
    }

    public static function deliveryCode24uurs13(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_13);
    }

    public function isDeliveryCode24uurs13(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_13);
    }

    public static function deliveryCode24uurs12(): self
    {
        return (new static())->set(static::DELIVERY_CODE_24UURS_12);
    }

    public function isDeliveryCode24uurs12(): bool
    {
        return $this->is(static::DELIVERY_CODE_24UURS_12);
    }

    public static function deliveryCode12d(): self
    {
        return (new static())->set(static::DELIVERY_CODE_1_2D);
    }

    public function isDeliveryCode12d(): bool
    {
        return $this->is(static::DELIVERY_CODE_1_2D);
    }

    public static function deliveryCode23d(): self
    {
        return (new static())->set(static::DELIVERY_CODE_2_3D);
    }

    public function isDeliveryCode23d(): bool
    {
        return $this->is(static::DELIVERY_CODE_2_3D);
    }

    public static function deliveryCode35d(): self
    {
        return (new static())->set(static::DELIVERY_CODE_3_5D);
    }

    public function isDeliveryCode35d(): bool
    {
        return $this->is(static::DELIVERY_CODE_3_5D);
    }

    public static function deliveryCode48d(): self
    {
        return (new static())->set(static::DELIVERY_CODE_4_8D);
    }

    public function isDeliveryCode48d(): bool
    {
        return $this->is(static::DELIVERY_CODE_4_8D);
    }

    public static function deliveryCode18d(): self
    {
        return (new static())->set(static::DELIVERY_CODE_1_8D);
    }

    public function isDeliveryCode18d(): bool
    {
        return $this->is(static::DELIVERY_CODE_1_8D);
    }

    public static function mijnLeverbelofte(): self
    {
        return (new static())->set(static::MIJN_LEVERBELOFTE);
    }

    public function isMijnLeverbelofte(): bool
    {
        return $this->is(static::MIJN_LEVERBELOFTE);
    }

    public static function vvb(): self
    {
        return (new static())->set(static::VVB);
    }

    public function isVvb(): bool
    {
        return $this->is(static::VVB);
    }
}
