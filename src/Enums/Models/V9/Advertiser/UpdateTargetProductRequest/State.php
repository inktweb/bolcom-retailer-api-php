<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Advertiser\UpdateTargetProductRequest;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class State extends Enum
{
    protected const MAX_ITEMS = 1;
    public const ENABLED = 'ENABLED';
    public const ARCHIVED = 'ARCHIVED';

    protected array $allowedValues = ['ENABLED', 'ARCHIVED'];

    public static function enabled(): self
    {
        return (new static())->set(static::ENABLED);
    }

    public function isEnabled(): bool
    {
        return $this->is(static::ENABLED);
    }

    public static function archived(): self
    {
        return (new static())->set(static::ARCHIVED);
    }

    public function isArchived(): bool
    {
        return $this->is(static::ARCHIVED);
    }
}
