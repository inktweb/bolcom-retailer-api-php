<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReplenishmentResponse fromArray(array $data)
 */
final class ReplenishmentResponse extends Model
{
    /**
     * The unique identifier of the replenishment.
     * @var string
     */
    protected $replenishmentId;

    /**
     * The date and time when this replenishment was created. In ISO 8601
     * format.
     * @var string
     */
    protected $creationDateTime;

    /**
     * Custom user defined reference to identify the replenishment.
     * @var string
     */
    protected $reference;

    /**
     * Indicates whether the replenishment will be labeled by bol.com or not.
     * @var bool
     */
    protected $labelingByBol;

    /**
     * Indicates the state of this replenishment order.
     * @var string
     */
    protected $state;
    protected $deliveryInformation;
    protected $pickupAppointment;

    /**
     * The number of load carriers in this shipment.
     * @var int
     */
    protected $numberOfLoadCarriers;

    /** @var LoadCarrier[] */
    protected $loadCarriers;

    /** @var ReplenishmentLine[] */
    protected $lines;

    /** @var InvalidReplenishmentLine[] */
    protected $invalidLines;

    /** @var StateTransition[] */
    protected $stateTransitions;

    public function setReplenishmentId(string $replenishmentId): self
    {
        $this->replenishmentId = $replenishmentId;
        return $this;
    }

    public function getReplenishmentId(): string
    {
        return $this->replenishmentId;
    }

    public function setCreationDateTime(string $creationDateTime): self
    {
        $this->creationDateTime = $creationDateTime;
        return $this;
    }

    public function getCreationDateTime(): string
    {
        return $this->creationDateTime;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getReference(): string
    {
        return $this->reference;
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

    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setDeliveryInformation($deliveryInformation): self
    {
        $this->deliveryInformation = $deliveryInformation;
        return $this;
    }

    public function getDeliveryInformation()
    {
        return $this->deliveryInformation;
    }

    public function setPickupAppointment($pickupAppointment): self
    {
        $this->pickupAppointment = $pickupAppointment;
        return $this;
    }

    public function getPickupAppointment()
    {
        return $this->pickupAppointment;
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

    public function setLoadCarriers(LoadCarrier $loadCarriers): self
    {
        $this->loadCarriers = $loadCarriers;
        return $this;
    }

    public function getLoadCarriers(): array
    {
        return $this->loadCarriers;
    }

    public function setLines(ReplenishmentLine $lines): self
    {
        $this->lines = $lines;
        return $this;
    }

    public function getLines(): array
    {
        return $this->lines;
    }

    public function setInvalidLines(InvalidReplenishmentLine $invalidLines): self
    {
        $this->invalidLines = $invalidLines;
        return $this;
    }

    public function getInvalidLines(): array
    {
        return $this->invalidLines;
    }

    public function setStateTransitions(StateTransition $stateTransitions): self
    {
        $this->stateTransitions = $stateTransitions;
        return $this;
    }

    public function getStateTransitions(): array
    {
        return $this->stateTransitions;
    }
}