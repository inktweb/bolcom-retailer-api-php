<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static BundlePrice fromArray(array $data)
 */
final class BundlePrice extends Model
{
    /**
     * The minimum quantity a customer must order in order to receive
     * discount. The element with value 1 must at least be present. In case
     * of using more elements, the respective quantities must be in
     * increasing order.
     * @var int
     */
    protected $quantity;

    /**
     * The price per single unit including VAT in case the customer orders at
     * least the quantity provided. When using more than 1 price, the
     * respective prices must be in decreasing order using 2 decimal
     * precision and dot separated.
     * @var float
     */
    protected $unitPrice;

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }
}
