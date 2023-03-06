<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static LabelPrice fromArray(array $data)
 */
final class LabelPrice extends Model
{
    /** The price that is charged for this delivery option, excluding VAT. */
    protected float $totalPrice = 0;

    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }
}
