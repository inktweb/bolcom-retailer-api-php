<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\CreateOfferExportRequest\Format;

/**
 * @method static CreateOfferExportRequest fromArray(array $data)
 */
final class CreateOfferExportRequest extends Model
{
    /** The file format in which to return the export. */
    protected Format $format;

    public function setFormat(Format $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getFormat(): Format
    {
        return $this->format;
    }
}
