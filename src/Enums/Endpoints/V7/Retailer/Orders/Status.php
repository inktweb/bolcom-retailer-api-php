<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Retailer\Orders;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Status extends Enum
{
    public const OPEN = 'OPEN';
    public const ALL = 'ALL';

    protected array $allowedValues = ['OPEN', 'ALL'];

    public static function open(): self
    {
        return (new static())->set(static::OPEN);
    }

    public function isOpen(): bool
    {
        return $this->is(static::OPEN);
    }

    public static function all(): self
    {
        return (new static())->set(static::ALL);
    }

    public function isAll(): bool
    {
        return $this->is(static::ALL);
    }
}