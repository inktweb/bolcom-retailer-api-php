<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V6\CreateOfferExportRequest;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Format extends Enum
{
    protected const MAX_ITEMS = 1;
    public const CSV = 'CSV';

    protected $allowedValues = ['CSV'];

    public static function csv(): self
    {
        return (new static())->set(static::CSV);
    }

    public function isCsv(): bool
    {
        return $this->is(static::CSV);
    }
}