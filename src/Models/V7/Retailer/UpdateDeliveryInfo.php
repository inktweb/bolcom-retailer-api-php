<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateDeliveryInfo fromArray(array $data)
 */
final class UpdateDeliveryInfo extends Model
{
    /**
     * The expected delivery date of the shipment at the bol.com warehouse.
     * In ISO 8601 format.
     */
    protected string $expectedDeliveryDate = '';

    public function setExpectedDeliveryDate(?string $expectedDeliveryDate): self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    public function getExpectedDeliveryDate(): ?string
    {
        return $this->expectedDeliveryDate;
    }
}
