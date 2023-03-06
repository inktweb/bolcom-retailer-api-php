<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Pricing fromArray(array $data)
 */
final class Pricing extends Model
{
    /**
     * A set of prices (containing a quantity and selling price) that apply
     * to this offer.
     * @var BundlePrice[]
     */
    protected array $bundlePrices = [];

    public function setBundlePrices(BundlePrice ...$bundlePrices): self
    {
        $this->bundlePrices = $bundlePrices;
        return $this;
    }

    public function getBundlePrices(): array
    {
        return $this->bundlePrices;
    }
}
