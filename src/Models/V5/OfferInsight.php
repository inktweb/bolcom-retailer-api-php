<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static OfferInsight fromArray(array $data)
 */
final class OfferInsight extends Model
{
    /**
     * The name of the requested offer insight.
     * @var string
     */
    protected $name;

    /**
     * Interpretation of the data that applies to this measurement.
     * @var string
     */
    protected $type;

    /**
     * Total number of customer visits on the product page when the offer had
     * the buy box over the requested period (excluding the current day).
     * @var float
     */
    protected $total;

    /** @var OfferInsightsCountry[] */
    protected $countries;

    /** @var Periods[] */
    protected $periods;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
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

    public function setCountries(OfferInsightsCountry $countries): self
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setPeriods(Periods $periods): self
    {
        $this->periods = $periods;
        return $this;
    }

    public function getPeriods(): array
    {
        return $this->periods;
    }
}
