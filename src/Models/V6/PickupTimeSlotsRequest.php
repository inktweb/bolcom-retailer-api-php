<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PickupTimeSlotsRequest fromArray(array $data)
 */
final class PickupTimeSlotsRequest extends Model
{
    /** @var PickupTimeSlotsAddress */
    protected $address;

    /**
     * The number of load carriers in this shipment.
     * @var int
     */
    protected $numberOfLoadCarriers = 0;

    public function setAddress(PickupTimeSlotsAddress $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress(): PickupTimeSlotsAddress
    {
        return $this->address;
    }

    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers): self
    {
        $this->numberOfLoadCarriers = $numberOfLoadCarriers;
        return $this;
    }

    public function getNumberOfLoadCarriers(): int
    {
        return $this->numberOfLoadCarriers;
    }
}
