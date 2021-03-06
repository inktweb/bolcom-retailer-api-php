<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\PickupAppointment\CancellationReason;

/**
 * @method static PickupAppointment fromArray(array $data)
 */
final class PickupAppointment extends Model
{
    /**
     * A comment to the transporter regarding the pickup appointment.
     * @var string
     */
    protected $commentToTransporter = '';

    /** @var Address */
    protected $address;

    /** @var ReplenishmentPickupTimeSlot */
    protected $pickupTimeSlot;

    /**
     * The date and time in ISO 8601 format when this replenishment was
     * picked up by the transporter.
     * @var string
     */
    protected $pickupDateTime = '';

    /**
     * In case of a pickup cancellation this field indicates the reason for
     * cancelling this pickup.
     * @var CancellationReason
     */
    protected $cancellationReason;

    public function setCommentToTransporter(?string $commentToTransporter): self
    {
        $this->commentToTransporter = $commentToTransporter;
        return $this;
    }

    public function getCommentToTransporter(): ?string
    {
        return $this->commentToTransporter;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setPickupTimeSlot(ReplenishmentPickupTimeSlot $pickupTimeSlot): self
    {
        $this->pickupTimeSlot = $pickupTimeSlot;
        return $this;
    }

    public function getPickupTimeSlot(): ReplenishmentPickupTimeSlot
    {
        return $this->pickupTimeSlot;
    }

    public function setPickupDateTime(?string $pickupDateTime): self
    {
        $this->pickupDateTime = $pickupDateTime;
        return $this;
    }

    public function getPickupDateTime(): ?string
    {
        return $this->pickupDateTime;
    }

    public function setCancellationReason(?CancellationReason $cancellationReason): self
    {
        $this->cancellationReason = $cancellationReason;
        return $this;
    }

    public function getCancellationReason(): ?CancellationReason
    {
        return $this->cancellationReason;
    }
}
