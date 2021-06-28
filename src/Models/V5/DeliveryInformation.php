<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static DeliveryInformation fromArray(array $data)
 */
final class DeliveryInformation extends Model
{
    /**
     * The expected delivery date of the shipment at the bol.com warehouse in
     * ISO 8601 format.
     * @var string
     */
    protected $expectedDeliveryDate;

    /**
     * The transporter that will pickup this replenishment.
     * @var string
     */
    protected $transporterCode;
    protected $destinationWarehouse;

    public function setExpectedDeliveryDate(string $expectedDeliveryDate): self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    public function getExpectedDeliveryDate(): string
    {
        return $this->expectedDeliveryDate;
    }

    public function setTransporterCode(string $transporterCode): self
    {
        $this->transporterCode = $transporterCode;
        return $this;
    }

    public function getTransporterCode(): string
    {
        return $this->transporterCode;
    }

    public function setDestinationWarehouse($destinationWarehouse): self
    {
        $this->destinationWarehouse = $destinationWarehouse;
        return $this;
    }

    public function getDestinationWarehouse()
    {
        return $this->destinationWarehouse;
    }
}