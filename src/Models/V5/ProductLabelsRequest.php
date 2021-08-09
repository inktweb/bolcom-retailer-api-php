<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProductLabelsRequest fromArray(array $data)
 */
final class ProductLabelsRequest extends Model
{
    /**
     * The printer format to create labels for.
     * @var string
     */
    protected $labelFormat = '';

    /** @var ProductLabelsProduct[] */
    protected $products = [];

    public function setLabelFormat(string $labelFormat): self
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    public function getLabelFormat(): string
    {
        return $this->labelFormat;
    }

    public function setProducts(ProductLabelsProduct ...$products): self
    {
        $this->products = $products;
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
