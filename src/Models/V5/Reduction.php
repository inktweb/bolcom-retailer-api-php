<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Reduction fromArray(array $data)
 */
final class Reduction extends Model
{
    /**
     * Maximum offer price that can be used to benefit from a commission
     * reduction, including VAT.
     * @var float
     */
    protected $maximumPrice;

    /**
     * A reduction to the commission if the maximum price criteria is met,
     * including VAT.
     * @var float
     */
    protected $costReduction;

    /**
     * The start date from which the commission reduction is valid, in ISO
     * 8601 format.
     * @var string
     */
    protected $startDate;

    /**
     * The end date from which the commission reduction is not valid anymore,
     * in ISO 8601 format.
     * @var string
     */
    protected $endDate;

    public function setMaximumPrice(float $maximumPrice): self
    {
        $this->maximumPrice = $maximumPrice;
        return $this;
    }

    public function getMaximumPrice(): float
    {
        return $this->maximumPrice;
    }

    public function setCostReduction(float $costReduction): self
    {
        $this->costReduction = $costReduction;
        return $this;
    }

    public function getCostReduction(): float
    {
        return $this->costReduction;
    }

    public function setStartDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function setEndDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getEndDate(): string
    {
        return $this->endDate;
    }
}