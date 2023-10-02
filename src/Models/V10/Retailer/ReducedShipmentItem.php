<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedShipmentItem fromArray(array $data)
 */
final class ReducedShipmentItem extends Model
{
    /**
     * A unique identifier for the item of the order that was shipped in this
     * shipment.
     */
    protected string $orderItemId = '';

    /** The EAN number associated with this product. */
    protected string $ean = '';

    public function setOrderItemId(string $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

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
