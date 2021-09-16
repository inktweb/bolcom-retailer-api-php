<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\CreateOfferExportRequest;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Format extends Enum
{
    public const CSV = 'CSV';

    protected $allowedValues = ['CSV'];

    public static function csv(): self
    {
        return (new static())->set(static::CSV);
    }
}