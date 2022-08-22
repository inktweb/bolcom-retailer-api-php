<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V7\BillingDetails;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Salutation extends Enum
{
    protected const MAX_ITEMS = 1;
    public const MALE = 'MALE';
    public const FEMALE = 'FEMALE';
    public const UNKNOWN = 'UNKNOWN';

    protected $allowedValues = ['MALE', 'FEMALE', 'UNKNOWN'];

    public static function male(): self
    {
        return (new static())->set(static::MALE);
    }

    public function isMale(): bool
    {
        return $this->is(static::MALE);
    }

    public static function female(): self
    {
        return (new static())->set(static::FEMALE);
    }

    public function isFemale(): bool
    {
        return $this->is(static::FEMALE);
    }

    public static function unknown(): self
    {
        return (new static())->set(static::UNKNOWN);
    }

    public function isUnknown(): bool
    {
        return $this->is(static::UNKNOWN);
    }
}
