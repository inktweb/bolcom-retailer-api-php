<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateReplenishmentRequest fromArray(array $data)
 */
final class UpdateReplenishmentRequest extends Model
{
    /**
     * Update the state of the replenishment to cancel the replenishment.
     * @var string
     */
    protected $state;
    protected $deliveryInfo;

    /**
     * The number of parcels in this replenishment. Note: for first mile this
     * is only a maximum of 20 load carriers.
     * @var int
     */
    protected $numberOfLoadCarriers;

    /** @var UpdateLoadCarrier[] */
    protected $loadCarriers;

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setDeliveryInfo($deliveryInfo): self
    {
        $this->deliveryInfo = $deliveryInfo;
        return $this;
    }

    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }

    public function setNumberOfLoadCarriers(?int $numberOfLoadCarriers): self
    {
        $this->numberOfLoadCarriers = $numberOfLoadCarriers;
        return $this;
    }

    public function getNumberOfLoadCarriers(): ?int
    {
        return $this->numberOfLoadCarriers;
    }

    public function setLoadCarriers(?UpdateLoadCarrier $loadCarriers): self
    {
        $this->loadCarriers = $loadCarriers;
        return $this;
    }

    public function getLoadCarriers(): ?array
    {
        return $this->loadCarriers;
    }
}
