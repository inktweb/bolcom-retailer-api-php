<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedShipment fromArray(array $data)
 */
final class ReducedShipment extends Model
{
    /**
     * A unique identifier for this shipment.
     * @var int
     */
    protected $shipmentId;

    /**
     * The date and time in ISO 8601 format when the order item was shipped.
     * @var string
     */
    protected $shipmentDateTime;

    /**
     * Reference supplied by the user when this item was shipped.
     * @var string
     */
    protected $shipmentReference;
    protected $order;

    /** @var ReducedShipmentItem[] */
    protected $shipmentItems;
    protected $transport;

    public function setShipmentId(?int $shipmentId): self
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    public function getShipmentId(): ?int
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

    public function setOrder($order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getOrder()
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

    public function setTransport($transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getTransport()
    {
        return $this->transport;
    }
}
