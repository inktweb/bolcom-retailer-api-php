<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedReplenishmentLines fromArray(array $data)
 */
final class ReducedReplenishmentLines extends Model
{
    /**
     * The EAN number associated with this product.
     * @var string
     */
    protected $ean = '';

    public function setEan(string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    public function getEan(): string
    {
        return $this->ean;
    }
}
