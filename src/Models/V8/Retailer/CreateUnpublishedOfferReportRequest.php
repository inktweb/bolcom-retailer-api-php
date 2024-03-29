<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V8\Retailer\CreateUnpublishedOfferReportRequest\Format;

/**
 * @method static CreateUnpublishedOfferReportRequest fromArray(array $data)
 */
final class CreateUnpublishedOfferReportRequest extends Model
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
