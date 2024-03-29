<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Commission fromArray(array $data)
 */
final class Commission extends Model
{
    /** The EAN number associated with this product. */
    protected string $ean = '';

    /** The condition of the offer. */
    protected string $condition = '';

    /**
     * The intended selling price per single unit up to 2 decimals precision,
     * including VAT.
     */
    protected float $unitPrice = 0;

    /** A fixed commission fee, including VAT. */
    protected float $fixedAmount = 0;

    /**
     * A percentage of commission, based on the intended selling price per
     * unit, including VAT.
     */
    protected float $percentage = 0;

    /**
     * The total commission for selling this product at bol.com. The price
     * includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     */
    protected float $totalCost = 0;

    /**
     * The total commission for selling this product at bol.com without
     * reductions including VAT.
     */
    protected ?float $totalCostWithoutReduction = 0;

    /** @var Reduction[] */
    protected array $reductions = [];

    public function setEan(string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setCondition(string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }

    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function setFixedAmount(float $fixedAmount): self
    {
        $this->fixedAmount = $fixedAmount;
        return $this;
    }

    public function getFixedAmount(): float
    {
        return $this->fixedAmount;
    }

    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;
        return $this;
    }

    public function getPercentage(): float
    {
        return $this->percentage;
    }

    public function setTotalCost(float $totalCost): self
    {
        $this->totalCost = $totalCost;
        return $this;
    }

    public function getTotalCost(): float
    {
        return $this->totalCost;
    }

    public function setTotalCostWithoutReduction(?float $totalCostWithoutReduction): self
    {
        $this->totalCostWithoutReduction = $totalCostWithoutReduction;
        return $this;
    }

    public function getTotalCostWithoutReduction(): ?float
    {
        return $this->totalCostWithoutReduction;
    }

    public function setReductions(Reduction ...$reductions): self
    {
        $this->reductions = $reductions;
        return $this;
    }

    public function getReductions(): array
    {
        return $this->reductions;
    }
}
