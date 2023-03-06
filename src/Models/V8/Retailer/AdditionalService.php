<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static AdditionalService fromArray(array $data)
 */
final class AdditionalService extends Model
{
    /**
     * An additional service type that the customer selected when purchasing
     * this order item.
     */
    protected string $serviceType = '';

    public function setServiceType(?string $serviceType): self
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }
}
