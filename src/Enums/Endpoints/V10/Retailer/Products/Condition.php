<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V10\Retailer\Products;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Condition extends Enum
{
    public const ALL = 'ALL';
    public const BAD = 'BAD';
    public const MODERATE = 'MODERATE';
    public const REASONABLE = 'REASONABLE';
    public const GOOD = 'GOOD';
    public const AS_NEW = 'AS_NEW';
    public const NEW = 'NEW';

    protected array $allowedValues = ['ALL', 'BAD', 'MODERATE', 'REASONABLE', 'GOOD', 'AS_NEW', 'NEW'];

    public static function all(): self
    {
        return (new static())->set(static::ALL);
    }

    public function isAll(): bool
    {
        return $this->is(static::ALL);
    }

    public static function bad(): self
    {
        return (new static())->set(static::BAD);
    }

    public function isBad(): bool
    {
        return $this->is(static::BAD);
    }

    public static function moderate(): self
    {
        return (new static())->set(static::MODERATE);
    }

    public function isModerate(): bool
    {
        return $this->is(static::MODERATE);
    }

    public static function reasonable(): self
    {
        return (new static())->set(static::REASONABLE);
    }

    public function isReasonable(): bool
    {
        return $this->is(static::REASONABLE);
    }

    public static function good(): self
    {
        return (new static())->set(static::GOOD);
    }

    public function isGood(): bool
    {
        return $this->is(static::GOOD);
    }

    public static function asNew(): self
    {
        return (new static())->set(static::AS_NEW);
    }

    public function isAsNew(): bool
    {
        return $this->is(static::AS_NEW);
    }

    public static function new(): self
    {
        return (new static())->set(static::NEW);
    }

    public function isNew(): bool
    {
        return $this->is(static::NEW);
    }
}
