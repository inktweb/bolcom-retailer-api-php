<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PickupTimeSlot fromArray(array $data)
 */
final class PickupTimeSlot extends Model
{
    /**
     * The available start date and time for the pickup appointment. In ISO
     * 8601 format.
     */
    protected string $fromDateTime = '';

    /**
     * The available end date and time for the pickup appointment. In ISO
     * 8601 format.
     */
    protected string $untilDateTime = '';

    public function setFromDateTime(string $fromDateTime): self
    {
        $this->fromDateTime = $fromDateTime;
        return $this;
    }

    public function getFromDateTime(): string
    {
        return $this->fromDateTime;
    }

    public function setUntilDateTime(string $untilDateTime): self
    {
        $this->untilDateTime = $untilDateTime;
        return $this;
    }

    public function getUntilDateTime(): string
    {
        return $this->untilDateTime;
    }
}