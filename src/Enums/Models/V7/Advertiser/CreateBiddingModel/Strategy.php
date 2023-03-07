<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Advertiser\CreateBiddingModel;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Strategy extends Enum
{
    protected const MAX_ITEMS = 1;
    public const AUTO = 'AUTO';
    public const MANUAL_BY_KEYWORD = 'MANUAL_BY_KEYWORD';
    public const MANUAL_BY_PRODUCT = 'MANUAL_BY_PRODUCT';

    protected array $allowedValues = ['AUTO', 'MANUAL_BY_KEYWORD', 'MANUAL_BY_PRODUCT'];

    public static function auto(): self
    {
        return (new static())->set(static::AUTO);
    }

    public function isAuto(): bool
    {
        return $this->is(static::AUTO);
    }

    public static function manualByKeyword(): self
    {
        return (new static())->set(static::MANUAL_BY_KEYWORD);
    }

    public function isManualByKeyword(): bool
    {
        return $this->is(static::MANUAL_BY_KEYWORD);
    }

    public static function manualByProduct(): self
    {
        return (new static())->set(static::MANUAL_BY_PRODUCT);
    }

    public function isManualByProduct(): bool
    {
        return $this->is(static::MANUAL_BY_PRODUCT);
    }
}