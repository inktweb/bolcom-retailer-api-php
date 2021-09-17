<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V5\Insights;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Period extends Enum
{
    protected const MIN_ITEMS = 1;
    public const DAY = 'DAY';
    public const WEEK = 'WEEK';
    public const MONTH = 'MONTH';

    protected $allowedValues = ['DAY', 'WEEK', 'MONTH'];

    public static function day(): self
    {
        return (new static())->set(static::DAY);
    }

    public function isDay(): bool
    {
        return $this->is(static::DAY);
    }

    public static function week(): self
    {
        return (new static())->set(static::WEEK);
    }

    public function isWeek(): bool
    {
        return $this->is(static::WEEK);
    }

    public static function month(): self
    {
        return (new static())->set(static::MONTH);
    }

    public function isMonth(): bool
    {
        return $this->is(static::MONTH);
    }
}
