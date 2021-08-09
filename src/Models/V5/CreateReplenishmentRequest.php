<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static CreateReplenishmentRequest fromArray(array $data)
 */
final class CreateReplenishmentRequest extends Model
{
    /**
     * Custom user reference for this replenishment. Must contain at least 1
     * digit and only upper case characters allowed.
     * @var string
     */
    protected $reference = '';

    /** @var CreateDeliveryInfo */
    protected $deliveryInfo;

    /**
     * Indicates whether the replenishment will be labeled by bol.com or not.
     * @var bool
     */
    protected $labelingByBol = false;

    /**
     * The number of parcels in this replenishment.
     * @var int
     */
    protected $numberOfLoadCarriers = 0;

    /** @var CreatePickupAppointment */
    protected $pickupAppointment;

    /** @var CreateReplenishmentLine[] */
    protected $lines = [];

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setDeliveryInfo(?CreateDeliveryInfo $deliveryInfo): self
    {
        $this->deliveryInfo = $deliveryInfo;
        return $this;
    }

    public function getDeliveryInfo(): ?CreateDeliveryInfo
    {
        return $this->deliveryInfo;
    }

    public function setLabelingByBol(bool $labelingByBol): self
    {
        $this->labelingByBol = $labelingByBol;
        return $this;
    }

    public function getLabelingByBol(): bool
    {
        return $this->labelingByBol;
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

    public function setPickupAppointment(?CreatePickupAppointment $pickupAppointment): self
    {
        $this->pickupAppointment = $pickupAppointment;
        return $this;
    }

    public function getPickupAppointment(): ?CreatePickupAppointment
    {
        return $this->pickupAppointment;
    }

    public function setLines(CreateReplenishmentLine ...$lines): self
    {
        $this->lines = $lines;
        return $this;
    }

    public function getLines(): array
    {
        return $this->lines;
    }
}
