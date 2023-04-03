<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Advertiser\ProcessStatus;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Status extends Enum
{
    protected const MAX_ITEMS = 1;
    public const PENDING = 'PENDING';
    public const SUCCESS = 'SUCCESS';
    public const FAILURE = 'FAILURE';
    public const TIMEOUT = 'TIMEOUT';

    protected array $allowedValues = ['PENDING', 'SUCCESS', 'FAILURE', 'TIMEOUT'];

    public static function pending(): self
    {
        return (new static())->set(static::PENDING);
    }

    public function isPending(): bool
    {
        return $this->is(static::PENDING);
    }

    public static function success(): self
    {
        return (new static())->set(static::SUCCESS);
    }

    public function isSuccess(): bool
    {
        return $this->is(static::SUCCESS);
    }

    public static function failure(): self
    {
        return (new static())->set(static::FAILURE);
    }

    public function isFailure(): bool
    {
        return $this->is(static::FAILURE);
    }

    public static function timeout(): self
    {
        return (new static())->set(static::TIMEOUT);
    }

    public function isTimeout(): bool
    {
        return $this->is(static::TIMEOUT);
    }
}
