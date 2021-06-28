<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateOfferPriceRequest fromArray(array $data)
 */
final class UpdateOfferPriceRequest extends Model
{
    protected $pricing;

    public function setPricing($pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    public function getPricing()
    {
        return $this->pricing;
    }
}