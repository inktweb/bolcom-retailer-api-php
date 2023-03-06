<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Advertiser\SearchTermPerformance;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class KeywordMatchType extends Enum
{
    protected const MAX_ITEMS = 1;
    public const EXACT = 'EXACT';
    public const PHRASE = 'PHRASE';

    protected array $allowedValues = ['EXACT', 'PHRASE'];

    public static function exact(): self
    {
        return (new static())->set(static::EXACT);
    }

    public function isExact(): bool
    {
        return $this->is(static::EXACT);
    }

    public static function phrase(): self
    {
        return (new static())->set(static::PHRASE);
    }

    public function isPhrase(): bool
    {
        return $this->is(static::PHRASE);
    }
}
