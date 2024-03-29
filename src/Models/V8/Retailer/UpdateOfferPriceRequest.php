<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateOfferPriceRequest fromArray(array $data)
 */
final class UpdateOfferPriceRequest extends Model
{
    protected Pricing $pricing;

    public function setPricing(Pricing $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    public function getPricing(): Pricing
    {
        return $this->pricing;
    }
}
