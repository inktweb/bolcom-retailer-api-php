<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ShipmentItem fromArray(array $data)
 */
final class ShipmentItem extends Model
{
    /**
     * A unique identifier for the item of the order that was shipped in this
     * shipment.
     */
    protected string $orderItemId = '';
    protected ?ShipmentFulfilment $fulfilment = null;
    protected ?OrderOffer $offer = null;
    protected ?OrderProduct $product = null;

    /** Amount of the product being ordered. */
    protected int $quantity = 0;

    /** The selling price to the customer of a single unit including VAT. */
    protected float $unitPrice = 0;

    /** The commission. */
    protected ?float $commission = 0;

    public function setOrderItemId(string $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    public function setFulfilment(?ShipmentFulfilment $fulfilment): self
    {
        $this->fulfilment = $fulfilment;
        return $this;
    }

    public function getFulfilment(): ?ShipmentFulfilment
    {
        return $this->fulfilment;
    }

    public function setOffer(?OrderOffer $offer): self
    {
        $this->offer = $offer;
        return $this;
    }

    public function getOffer(): ?OrderOffer
    {
        return $this->offer;
    }

    public function setProduct(?OrderProduct $product): self
    {
        $this->product = $product;
        return $this;
    }

    public function getProduct(): ?OrderProduct
    {
        return $this->product;
    }

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

    public function setCommission(?float $commission): self
    {
        $this->commission = $commission;
        return $this;
    }

    public function getCommission(): ?float
    {
        return $this->commission;
    }
}
