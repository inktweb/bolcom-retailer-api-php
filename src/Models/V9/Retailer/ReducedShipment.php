<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedShipment fromArray(array $data)
 */
final class ReducedShipment extends Model
{
    /** A unique identifier for this shipment. */
    protected ?string $shipmentId = '';

    /** The date and time in ISO 8601 format when the order item was shipped. */
    protected ?string $shipmentDateTime = '';

    /** Reference supplied by the user when this item was shipped. */
    protected ?string $shipmentReference = '';
    protected ReducedShipmentOrder $order;

    /** @var ReducedShipmentItem[] */
    protected array $shipmentItems = [];
    protected ReducedTransport $transport;

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

    public function setOrder(ReducedShipmentOrder $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getOrder(): ReducedShipmentOrder
    {
        return $this->order;
    }

    public function setShipmentItems(ReducedShipmentItem ...$shipmentItems): self
    {
        $this->shipmentItems = $shipmentItems;
        return $this;
    }

    public function getShipmentItems(): array
    {
        return $this->shipmentItems;
    }

    public function setTransport(ReducedTransport $transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getTransport(): ReducedTransport
    {
        return $this->transport;
    }
}
