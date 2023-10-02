<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProductPlacementResponse fromArray(array $data)
 */
final class ProductPlacementResponse extends Model
{
    /** The URL of the product on the webshop. */
    protected string $url = '';

    /** @var Category[] */
    protected array $categories = [];

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setCategories(Category ...$categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }
}
