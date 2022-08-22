<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Commissions;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Condition extends Enum
{
    public const NEW = 'NEW';
    public const AS_NEW = 'AS_NEW';
    public const GOOD = 'GOOD';
    public const REASONABLE = 'REASONABLE';
    public const MODERATE = 'MODERATE';

    protected $allowedValues = ['NEW', 'AS_NEW', 'GOOD', 'REASONABLE', 'MODERATE'];

    public static function new(): self
    {
        return (new static())->set(static::NEW);
    }

    public function isNew(): bool
    {
        return $this->is(static::NEW);
    }

    public static function asNew(): self
    {
        return (new static())->set(static::AS_NEW);
    }

    public function isAsNew(): bool
    {
        return $this->is(static::AS_NEW);
    }

    public static function good(): self
    {
        return (new static())->set(static::GOOD);
    }

    public function isGood(): bool
    {
        return $this->is(static::GOOD);
    }

    public static function reasonable(): self
    {
        return (new static())->set(static::REASONABLE);
    }

    public function isReasonable(): bool
    {
        return $this->is(static::REASONABLE);
    }

    public static function moderate(): self
    {
        return (new static())->set(static::MODERATE);
    }

    public function isModerate(): bool
    {
        return $this->is(static::MODERATE);
    }
}
