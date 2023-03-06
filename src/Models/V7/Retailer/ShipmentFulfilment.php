<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\ShipmentFulfilment\DistributionParty;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\ShipmentFulfilment\Method;

/**
 * @method static ShipmentFulfilment fromArray(array $data)
 */
final class ShipmentFulfilment extends Model
{
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by
     * bol.com (FBB).
     */
    protected Method $method;

    /**
     * The party that manages the distribution, either bol.com or the
     * retailer itself.
     */
    protected DistributionParty $distributionParty;

    /**
     * The ultimate delivery date at which this order must be delivered at
     * the customer's shipping address. This field is empty in case the
     * exactDeliveryDate is filled.
     */
    protected string $latestDeliveryDate = '';

    public function setMethod(?Method $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod(): ?Method
    {
        return $this->method;
    }

    public function setDistributionParty(?DistributionParty $distributionParty): self
    {
        $this->distributionParty = $distributionParty;
        return $this;
    }

    public function getDistributionParty(): ?DistributionParty
    {
        return $this->distributionParty;
    }

    public function setLatestDeliveryDate(?string $latestDeliveryDate): self
    {
        $this->latestDeliveryDate = $latestDeliveryDate;
        return $this;
    }

    public function getLatestDeliveryDate(): ?string
    {
        return $this->latestDeliveryDate;
    }
}
