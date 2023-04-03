<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Assortment fromArray(array $data)
 */
final class Assortment extends Model
{
    /** The EAN associated with the target product. */
    protected string $ean = '';

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
