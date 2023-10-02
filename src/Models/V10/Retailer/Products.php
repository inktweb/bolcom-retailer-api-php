<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Container for multiple products.
 * @method static Products fromArray(array $data)
 */
final class Products extends Model
{
    /** @var Product[] */
    protected array $products = [];

    public function setProducts(Product ...$products): self
    {
        $this->products = $products;
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
