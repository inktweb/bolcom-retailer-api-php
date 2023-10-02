<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\PromotionCountryCode\CountryCode;

/**
 * @method static PromotionCountryCode fromArray(array $data)
 */
final class PromotionCountryCode extends Model
{
    /** The country code of the country in which the promotion is active. */
    protected CountryCode $countryCode;

    public function setCountryCode(CountryCode $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): CountryCode
    {
        return $this->countryCode;
    }
}
