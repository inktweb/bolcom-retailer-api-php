<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\BulkCommissionQuery\Condition;

/**
 * @method static BulkCommissionQuery fromArray(array $data)
 */
final class BulkCommissionQuery extends Model
{
    /** The EAN number associated with this product. */
    protected string $ean = '';

    /** The condition of the offer. */
    protected ?Condition $condition = null;

    /**
     * The price of the product with a period as a decimal separator. The
     * price should always have two decimals precision.
     */
    protected float $unitPrice = 0;

    public function setEan(string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setCondition(?Condition $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function getCondition(): ?Condition
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
}
