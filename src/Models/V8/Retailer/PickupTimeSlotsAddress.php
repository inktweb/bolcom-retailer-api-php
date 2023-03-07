<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PickupTimeSlotsAddress fromArray(array $data)
 */
final class PickupTimeSlotsAddress extends Model
{
    /** The street name of the pickup address. */
    protected string $streetName = '';

    /** The house number of the pickup address. */
    protected string $houseNumber = '';

    /** The extension of the house number. */
    protected ?string $houseNumberExtension = '';

    /** The zip code in '1234AB' format for NL and '0000' for BE addresses. */
    protected string $zipCode = '';

    /** The city of the pickup address. */
    protected string $city = '';

    /** The ISO 3166-2 country code. */
    protected string $countryCode = '';

    public function setStreetName(string $streetName): self
    {
        $this->streetName = $streetName;
        return $this;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function setHouseNumber(string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function setHouseNumberExtension(?string $houseNumberExtension): self
    {
        $this->houseNumberExtension = $houseNumberExtension;
        return $this;
    }

    public function getHouseNumberExtension(): ?string
    {
        return $this->houseNumberExtension;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

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
