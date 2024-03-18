<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Periods fromArray(array $data)
 */
final class Periods extends Model
{
    protected OfferInsightsPeriod $period;

    /**
     * Total number of customer visits on the product page when the offer had
     * the buy box over the requested period (excluding the current day).
     */
    protected ?float $total = 0;

    /** @var OfferInsightsCountry[] */
    protected ?array $countries = [];

    public function setPeriod(OfferInsightsPeriod $period): self
    {
        $this->period = $period;
        return $this;
    }

    public function getPeriod(): OfferInsightsPeriod
    {
        return $this->period;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setCountries(?OfferInsightsCountry ...$countries): self
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(): ?array
    {
        return $this->countries;
    }
}