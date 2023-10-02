<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ShipmentRequest fromArray(array $data)
 */
final class ShipmentRequest extends Model
{
    /**
     * List of order items to ship.
     * @var OrderItem[]
     */
    protected array $orderItems = [];

    /**
     * A user-defined reference that you can provide to add to the shipment.
     * Can be used for own administration purposes. Only 'null' or non-empty
     * strings accepted.
     */
    protected ?string $shipmentReference = '';

    /** The identifier of the purchased shipping label. */
    protected ?string $shippingLabelId = '';
    protected ?TransportInstruction $transport = null;

    public function setOrderItems(OrderItem ...$orderItems): self
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    public function getOrderItems(): array
    {
        return $this->orderItems;
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

    public function setShippingLabelId(?string $shippingLabelId): self
    {
        $this->shippingLabelId = $shippingLabelId;
        return $this;
    }

    public function getShippingLabelId(): ?string
    {
        return $this->shippingLabelId;
    }

    public function setTransport(?TransportInstruction $transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getTransport(): ?TransportInstruction
    {
        return $this->transport;
    }
}
