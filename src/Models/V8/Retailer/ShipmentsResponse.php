<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ShipmentsResponse fromArray(array $data)
 */
final class ShipmentsResponse extends Model
{
    /** @var ReducedShipment[] */
    protected array $shipments = [];

    public function setShipments(ReducedShipment ...$shipments): self
    {
        $this->shipments = $shipments;
        return $this;
    }

    public function getShipments(): array
    {
        return $this->shipments;
    }
}
