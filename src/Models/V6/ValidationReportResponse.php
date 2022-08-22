<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Validation report.
 * @method static ValidationReportResponse fromArray(array $data)
 */
final class ValidationReportResponse extends Model
{
    /** @var ProductContentResponse[] */
    protected $productContents = [];

    public function setProductContents(?ProductContentResponse ...$productContents): self
    {
        $this->productContents = $productContents;
        return $this;
    }

    public function getProductContents(): ?array
    {
        return $this->productContents;
    }
}
