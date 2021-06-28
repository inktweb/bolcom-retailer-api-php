<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static CountryCode fromArray(array $data)
 */
final class CountryCode extends Model
{
    /**
     * Countries in which this offer is currently on sale in the webshop, in
     * ISO-3166-1 format.
     * @var string
     */
    protected $countryCode;

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}