<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ShipmentOrder fromArray(array $data)
 */
final class ShipmentOrder extends Model
{
    /** A unique identifier for the order this shipment is related to. */
    protected ?string $orderId = '';

    /** The date and time in ISO 8601 format when the order was placed. */
    protected ?string $orderPlacedDateTime = '';

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderPlacedDateTime(?string $orderPlacedDateTime): self
    {
        $this->orderPlacedDateTime = $orderPlacedDateTime;
        return $this;
    }

    public function getOrderPlacedDateTime(): ?string
    {
        return $this->orderPlacedDateTime;
    }
}
