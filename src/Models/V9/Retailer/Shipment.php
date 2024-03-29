<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Shipment fromArray(array $data)
 */
final class Shipment extends Model
{
    /** A unique identifier for this shipment. */
    protected ?string $shipmentId = '';

    /** The date and time in ISO 8601 format when the order item was shipped. */
    protected ?string $shipmentDateTime = '';

    /** Reference supplied by the user when this item was shipped. */
    protected ?string $shipmentReference = '';

    /** Indicates whether this order is shipped to a Pick Up Point. */
    protected ?bool $pickupPoint = false;
    protected ShipmentOrder $order;
    protected ?ShipmentDetails $shipmentDetails = null;
    protected ?BillingDetails $billingDetails = null;

    /** @var ShipmentItem[] */
    protected array $shipmentItems = [];
    protected ?ShipmentTransport $transport = null;

    public function setShipmentId(?string $shipmentId): self
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }

    public function setShipmentDateTime(?string $shipmentDateTime): self
    {
        $this->shipmentDateTime = $shipmentDateTime;
        return $this;
    }

    public function getShipmentDateTime(): ?string
    {
        return $this->shipmentDateTime;
    }

    public function setShipmentReference(?string $shipmentReference): self
    {
        $this->shipmentReference = $shipmentReference;
        return $this;
    }

    public function getShipmentReference(): ?string
    {
        return $this->shipmentReference;
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

    public function setOrder(ShipmentOrder $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getOrder(): ShipmentOrder
    {
        return $this->order;
    }

    public function setShipmentDetails(?ShipmentDetails $shipmentDetails): self
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }

    public function getShipmentDetails(): ?ShipmentDetails
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

    public function setShipmentItems(ShipmentItem ...$shipmentItems): self
    {
        $this->shipmentItems = $shipmentItems;
        return $this;
    }

    public function getShipmentItems(): array
    {
        return $this->shipmentItems;
    }

    public function setTransport(?ShipmentTransport $transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getTransport(): ?ShipmentTransport
    {
        return $this->transport;
    }
}
