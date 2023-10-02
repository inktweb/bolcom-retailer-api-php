<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\KeySet;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Type extends Enum
{
    protected const MAX_ITEMS = 1;
    public const RSA = 'RSA';

    protected array $allowedValues = ['RSA'];

    public static function rsa(): self
    {
        return (new static())->set(static::RSA);
    }

    public function isRsa(): bool
    {
        return $this->is(static::RSA);
    }
}
