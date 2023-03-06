<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Advertiser\UpdateAdGroupRequest;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class State extends Enum
{
    protected const MAX_ITEMS = 1;
    public const ENABLED = 'ENABLED';
    public const PAUSED = 'PAUSED';
    public const ARCHIVED = 'ARCHIVED';

    protected array $allowedValues = ['ENABLED', 'PAUSED', 'ARCHIVED'];

    public static function enabled(): self
    {
        return (new static())->set(static::ENABLED);
    }

    public function isEnabled(): bool
    {
        return $this->is(static::ENABLED);
    }

    public static function paused(): self
    {
        return (new static())->set(static::PAUSED);
    }

    public function isPaused(): bool
    {
        return $this->is(static::PAUSED);
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
