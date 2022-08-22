<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V7\LoadCarrier;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class TransportState extends Enum
{
    protected const MAX_ITEMS = 1;
    public const ANNOUNCED = 'ANNOUNCED';
    public const PICKED_UP = 'PICKED_UP';
    public const UNDERWAY = 'UNDERWAY';
    public const DELAYED = 'DELAYED';
    public const ARRIVED = 'ARRIVED';
    public const ERROR = 'ERROR';

    protected $allowedValues = ['ANNOUNCED', 'PICKED_UP', 'UNDERWAY', 'DELAYED', 'ARRIVED', 'ERROR'];

    public static function announced(): self
    {
        return (new static())->set(static::ANNOUNCED);
    }

    public function isAnnounced(): bool
    {
        return $this->is(static::ANNOUNCED);
    }

    public static function pickedUp(): self
    {
        return (new static())->set(static::PICKED_UP);
    }

    public function isPickedUp(): bool
    {
        return $this->is(static::PICKED_UP);
    }

    public static function underway(): self
    {
        return (new static())->set(static::UNDERWAY);
    }

    public function isUnderway(): bool
    {
        return $this->is(static::UNDERWAY);
    }

    public static function delayed(): self
    {
        return (new static())->set(static::DELAYED);
    }

    public function isDelayed(): bool
    {
        return $this->is(static::DELAYED);
    }

    public static function arrived(): self
    {
        return (new static())->set(static::ARRIVED);
    }

    public function isArrived(): bool
    {
        return $this->is(static::ARRIVED);
    }

    public static function error(): self
    {
        return (new static())->set(static::ERROR);
    }

    public function isError(): bool
    {
        return $this->is(static::ERROR);
    }
}
