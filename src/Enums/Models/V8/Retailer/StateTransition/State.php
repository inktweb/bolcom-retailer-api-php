<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V8\Retailer\StateTransition;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class State extends Enum
{
    protected const MAX_ITEMS = 1;
    public const DRAFT = 'DRAFT';
    public const ANNOUNCED = 'ANNOUNCED';
    public const IN_TRANSIT = 'IN_TRANSIT';
    public const ARRIVED_AT_WH = 'ARRIVED_AT_WH';
    public const IN_PROGRESS_AT_WH = 'IN_PROGRESS_AT_WH';
    public const CANCELLED = 'CANCELLED';
    public const DONE = 'DONE';

    protected array $allowedValues = [
        'DRAFT',
        'ANNOUNCED',
        'IN_TRANSIT',
        'ARRIVED_AT_WH',
        'IN_PROGRESS_AT_WH',
        'CANCELLED',
        'DONE',
    ];

    public static function draft(): self
    {
        return (new static())->set(static::DRAFT);
    }

    public function isDraft(): bool
    {
        return $this->is(static::DRAFT);
    }

    public static function announced(): self
    {
        return (new static())->set(static::ANNOUNCED);
    }

    public function isAnnounced(): bool
    {
        return $this->is(static::ANNOUNCED);
    }

    public static function inTransit(): self
    {
        return (new static())->set(static::IN_TRANSIT);
    }

    public function isInTransit(): bool
    {
        return $this->is(static::IN_TRANSIT);
    }

    public static function arrivedAtWh(): self
    {
        return (new static())->set(static::ARRIVED_AT_WH);
    }

    public function isArrivedAtWh(): bool
    {
        return $this->is(static::ARRIVED_AT_WH);
    }

    public static function inProgressAtWh(): self
    {
        return (new static())->set(static::IN_PROGRESS_AT_WH);
    }

    public function isInProgressAtWh(): bool
    {
        return $this->is(static::IN_PROGRESS_AT_WH);
    }

    public static function cancelled(): self
    {
        return (new static())->set(static::CANCELLED);
    }

    public function isCancelled(): bool
    {
        return $this->is(static::CANCELLED);
    }

    public static function done(): self
    {
        return (new static())->set(static::DONE);
    }

    public function isDone(): bool
    {
        return $this->is(static::DONE);
    }
}
