<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * An order.
 * @method static Order fromArray(array $data)
 */
final class Order extends Model
{
    /**
     * The order id.
     * @var string
     */
    protected $orderId = '';

    /**
     * Indicates whether this order is shipped to a Pick Up Point.
     * @var bool
     */
    protected $pickupPoint = false;

    /**
     * The date and time in ISO 8601 format when the order was placed.
     * @var string
     */
    protected $orderPlacedDateTime = '';

    /** @var ShipmentDetails */
    protected $shipmentDetails;

    /** @var BillingDetails */
    protected $billingDetails;

    /** @var OrderOrderItem[] */
    protected $orderItems = [];

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setPickupPoint(?bool $pickupPoint): self
    {
        $this->pickupPoint = $pickupPoint;
        return $this;
    }

    public function getPickupPoint(): ?bool
    {
        return $this->pickupPoint;
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

    public function setShipmentDetails(ShipmentDetails $shipmentDetails): self
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }

    public function getShipmentDetails(): ShipmentDetails
    {
        return $this->shipmentDetails;
    }

    public function setBillingDetails(?BillingDetails $billingDetails): self
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }

    public function getBillingDetails(): ?BillingDetails
    {
        return $this->billingDetails;
    }

    public function setOrderItems(OrderOrderItem ...$orderItems): self
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
}
