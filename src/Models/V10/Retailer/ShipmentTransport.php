<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ShipmentTransport fromArray(array $data)
 */
final class ShipmentTransport extends Model
{
    /** The transport id. */
    protected ?string $transportId = '';

    /** Specify the transporter that will carry out the shipment. */
    protected ?string $transporterCode = '';

    /** The track and trace code that is associated with this transport. */
    protected string $trackAndTrace = '';

    /** The shipping label id. */
    protected ?string $shippingLabelId = '';

    /** @var TransportEvent[] */
    protected ?array $transportEvents = [];

    public function setTransportId(?string $transportId): self
    {
        $this->transportId = $transportId;
        return $this;
    }

    public function getTransportId(): ?string
    {
        return $this->transportId;
    }

    public function setTransporterCode(?string $transporterCode): self
    {
        $this->transporterCode = $transporterCode;
        return $this;
    }

    public function getTransporterCode(): ?string
    {
        return $this->transporterCode;
    }

    public function setTrackAndTrace(string $trackAndTrace): self
    {
        $this->trackAndTrace = $trackAndTrace;
        return $this;
    }

    public function getTrackAndTrace(): string
    {
        return $this->trackAndTrace;
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

    public function setTransportEvents(?TransportEvent ...$transportEvents): self
    {
        $this->transportEvents = $transportEvents;
        return $this;
    }

    public function getTransportEvents(): ?array
    {
        return $this->transportEvents;
    }
}