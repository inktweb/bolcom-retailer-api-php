<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Store fromArray(array $data)
 */
final class Store extends Model
{
    /** The product title for the product associated with this offer. */
    protected ?string $productTitle = '';

    /** @var OffersCountryCode[] */
    protected array $visible = [];

    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;
        return $this;
    }

    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    public function setVisible(OffersCountryCode ...$visible): self
    {
        $this->visible = $visible;
        return $this;
    }

    public function getVisible(): array
    {
        return $this->visible;
    }
}
