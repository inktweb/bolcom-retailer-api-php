<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Advertiser\CampaignCountry\CountryCode;

/**
 * @method static CampaignCountry fromArray(array $data)
 */
final class CampaignCountry extends Model
{
    /** The target country in which your ads need to be shown. */
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
