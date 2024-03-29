<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The list of range filters to get associated products for.
 * @method static ProductListFilterRange fromArray(array $data)
 */
final class ProductListFilterRange extends Model
{
    /** The id of the range filter the products can be found within. */
    protected string $rangeId = '';

    /**
     * The minimum value for the range that can be used to filter the
     * products.
     */
    protected float $min = 0;

    /**
     * The maximum value for the range that can be used to filter the
     * products.
     */
    protected float $max = 0;

    public function setRangeId(string $rangeId): self
    {
        $this->rangeId = $rangeId;
        return $this;
    }

    public function getRangeId(): string
    {
        return $this->rangeId;
    }

    public function setMin(float $min): self
    {
        $this->min = $min;
        return $this;
    }

    public function getMin(): float
    {
        return $this->min;
    }

    public function setMax(float $max): self
    {
        $this->max = $max;
        return $this;
    }

    public function getMax(): float
    {
        return $this->max;
    }
}
