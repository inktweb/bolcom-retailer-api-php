<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\UploadReportResponse;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Status extends Enum
{
    protected const MAX_ITEMS = 1;
    public const IN_PROGRESS = 'IN_PROGRESS';
    public const COMPLETED = 'COMPLETED';

    protected array $allowedValues = ['IN_PROGRESS', 'COMPLETED'];

    public static function inProgress(): self
    {
        return (new static())->set(static::IN_PROGRESS);
    }

    public function isInProgress(): bool
    {
        return $this->is(static::IN_PROGRESS);
    }

    public static function completed(): self
    {
        return (new static())->set(static::COMPLETED);
    }

    public function isCompleted(): bool
    {
        return $this->is(static::COMPLETED);
    }
}
