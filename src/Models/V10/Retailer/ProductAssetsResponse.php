<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProductAssetsResponse fromArray(array $data)
 */
final class ProductAssetsResponse extends Model
{
    /** @var ProductAssets[] */
    protected array $assets = [];

    public function setAssets(ProductAssets ...$assets): self
    {
        $this->assets = $assets;
        return $this;
    }

    public function getAssets(): array
    {
        return $this->assets;
    }
}
