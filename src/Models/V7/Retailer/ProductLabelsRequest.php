<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\ProductLabelsRequest\LabelFormat;

/**
 * @method static ProductLabelsRequest fromArray(array $data)
 */
final class ProductLabelsRequest extends Model
{
    /** The printer format to create labels for. */
    protected LabelFormat $labelFormat;

    /** @var ProductLabelsProduct[] */
    protected array $products = [];

    public function setLabelFormat(LabelFormat $labelFormat): self
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    public function getLabelFormat(): LabelFormat
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