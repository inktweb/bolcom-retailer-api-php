<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PickupTimeSlotsResponse fromArray(array $data)
 */
final class PickupTimeSlotsResponse extends Model
{
    /** @var PickupTimeSlot[] */
    protected $timeSlots = [];

    public function setTimeSlots(?PickupTimeSlot ...$timeSlots): self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }

    public function getTimeSlots(): ?array
    {
        return $this->timeSlots;
    }
}
