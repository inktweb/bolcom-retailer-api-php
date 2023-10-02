<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * List of offers.
 * @method static Offer fromArray(array $data)
 */
final class Offer extends Model
{
    /** Unique identifier for an offer. */
    protected string $offerId = '';

    /** The ID of the retailer which the offer belongs to. */
    protected string $retailerId = '';

    /** The country code. */
    protected string $countryCode = '';

    /**
     * Indicator if the offer is the best offer within the country for the
     * requested EAN.
     */
    protected bool $bestOffer = false;

    /**
     * The selling price to the customer of a single unit including VAT
     * unless there is a discount. The price should always have two decimals
     * precision.
     */
    protected float $price = 0;

    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by
     * bol.com (FBB).
     */
    protected string $fulfilmentMethod = '';

    /** The condition of the offered product. */
    protected ?string $condition = '';

    /**
     * The time in ISO 8601 format when the ultimate order time on the day in
     * order to comply to the maxDeliveryDate as a promise.
     */
    protected ?string $ultimateOrderTime = '';

    /** The date at which package can be delivered to customer earliest. */
    protected ?string $minDeliveryDate = '';

    /**
     * The date at which package can be delivered to customer latest. In case
     * of pre-orders where a specific delivery date is not available, this
     * field will not be present.
     */
    protected ?string $maxDeliveryDate = '';

    public function setOfferId(string $offerId): self
    {
        $this->offerId = $offerId;
        return $this;
    }

    public function getOfferId(): string
    {
        return $this->offerId;
    }

    public function setRetailerId(string $retailerId): self
    {
        $this->retailerId = $retailerId;
        return $this;
    }

    public function getRetailerId(): string
    {
        return $this->retailerId;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setBestOffer(bool $bestOffer): self
    {
        $this->bestOffer = $bestOffer;
        return $this;
    }

    public function getBestOffer(): bool
    {
        return $this->bestOffer;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setFulfilmentMethod(string $fulfilmentMethod): self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;
        return $this;
    }

    public function getFulfilmentMethod(): string
    {
        return $this->fulfilmentMethod;
    }

    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setUltimateOrderTime(?string $ultimateOrderTime): self
    {
        $this->ultimateOrderTime = $ultimateOrderTime;
        return $this;
    }

    public function getUltimateOrderTime(): ?string
    {
        return $this->ultimateOrderTime;
    }

    public function setMinDeliveryDate(?string $minDeliveryDate): self
    {
        $this->minDeliveryDate = $minDeliveryDate;
        return $this;
    }

    public function getMinDeliveryDate(): ?string
    {
        return $this->minDeliveryDate;
    }

    public function setMaxDeliveryDate(?string $maxDeliveryDate): self
    {
        $this->maxDeliveryDate = $maxDeliveryDate;
        return $this;
    }

    public function getMaxDeliveryDate(): ?string
    {
        return $this->maxDeliveryDate;
    }
}
