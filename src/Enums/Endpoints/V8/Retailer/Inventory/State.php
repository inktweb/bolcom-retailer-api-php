<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V8\Retailer\Inventory;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class State extends Enum
{
    public const REGULAR = 'REGULAR';
    public const GRADED = 'GRADED';

    protected array $allowedValues = ['REGULAR', 'GRADED'];

    public static function regular(): self
    {
        return (new static())->set(static::REGULAR);
    }

    public function isRegular(): bool
    {
        return $this->is(static::REGULAR);
    }

    public static function graded(): self
    {
        return (new static())->set(static::GRADED);
    }

    public function isGraded(): bool
    {
        return $this->is(static::GRADED);
    }
}
