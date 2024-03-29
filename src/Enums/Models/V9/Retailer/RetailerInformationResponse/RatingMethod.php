<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\RetailerInformationResponse;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class RatingMethod extends Enum
{
    protected const MAX_ITEMS = 1;
    public const ALL_REVIEWS = 'ALL_REVIEWS';
    public const THREE_MONTHS = 'THREE_MONTHS';

    protected array $allowedValues = ['ALL_REVIEWS', 'THREE_MONTHS'];

    public static function allReviews(): self
    {
        return (new static())->set(static::ALL_REVIEWS);
    }

    public function isAllReviews(): bool
    {
        return $this->is(static::ALL_REVIEWS);
    }

    public static function threeMonths(): self
    {
        return (new static())->set(static::THREE_MONTHS);
    }

    public function isThreeMonths(): bool
    {
        return $this->is(static::THREE_MONTHS);
    }
}
