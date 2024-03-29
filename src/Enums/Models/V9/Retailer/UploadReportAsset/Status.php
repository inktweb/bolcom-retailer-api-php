<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\UploadReportAsset;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Status extends Enum
{
    protected const MAX_ITEMS = 1;
    public const IN_PROGRESS = 'IN_PROGRESS';
    public const DECLINED = 'DECLINED';
    public const PUBLISHED = 'PUBLISHED';

    protected array $allowedValues = ['IN_PROGRESS', 'DECLINED', 'PUBLISHED'];

    public static function inProgress(): self
    {
        return (new static())->set(static::IN_PROGRESS);
    }

    public function isInProgress(): bool
    {
        return $this->is(static::IN_PROGRESS);
    }

    public static function declined(): self
    {
        return (new static())->set(static::DECLINED);
    }

    public function isDeclined(): bool
    {
        return $this->is(static::DECLINED);
    }

    public static function published(): self
    {
        return (new static())->set(static::PUBLISHED);
    }

    public function isPublished(): bool
    {
        return $this->is(static::PUBLISHED);
    }
}
