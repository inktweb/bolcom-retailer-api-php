<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\OrderFulfilment\DistributionParty;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\OrderFulfilment\TimeFrameType;

/**
 * @method static OrderFulfilment fromArray(array $data)
 */
final class OrderFulfilment extends Model
{
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by
     * bol.com (FBB).
     */
    protected ?string $method = '';

    /**
     * The party that manages the distribution, either bol.com or the
     * retailer itself.
     */
    protected ?DistributionParty $distributionParty = null;

    /**
     * The ultimate delivery date at which this order must be delivered at
     * the customer's shipping address. This field is empty in case the
     * exactDeliveryDate is filled.
     */
    protected ?string $latestDeliveryDate = '';

    /**
     * The exact delivery date at which this order must be delivered at the
     * customer's shipping address. This field is only filled when the
     * customer chose an exact date for delivery. This field is empty in case
     * the latestDeliveryDate is filled.
     */
    protected ?string $exactDeliveryDate = '';

    /**
     * The date this order item will automatically expire and thereby
     * cancelling this order item from the order.
     */
    protected ?string $expiryDate = '';

    /** Delivery option selected by the customer. */
    protected ?TimeFrameType $timeFrameType = null;

    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod(): ?string
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

    public function setExactDeliveryDate(?string $exactDeliveryDate): self
    {
        $this->exactDeliveryDate = $exactDeliveryDate;
        return $this;
    }

    public function getExactDeliveryDate(): ?string
    {
        return $this->exactDeliveryDate;
    }

    public function setExpiryDate(?string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    public function setTimeFrameType(?TimeFrameType $timeFrameType): self
    {
        $this->timeFrameType = $timeFrameType;
        return $this;
    }

    public function getTimeFrameType(): ?TimeFrameType
    {
        return $this->timeFrameType;
    }
}
