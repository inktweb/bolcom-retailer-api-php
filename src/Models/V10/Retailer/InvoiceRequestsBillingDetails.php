<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\InvoiceRequestsBillingDetails\Salutation;

/**
 * The details of the customer that is responsible for the financial
 * fulfillment of this shipment.
 * @method static InvoiceRequestsBillingDetails fromArray(array $data)
 */
final class InvoiceRequestsBillingDetails extends Model
{
    /** The salutation of the customer. */
    protected Salutation $salutation;

    /** The first name of the customer. */
    protected ?string $firstName = '';

    /** The surname of the customer. */
    protected ?string $surname = '';

    /** The street name. */
    protected ?string $streetName = '';

    /** The house number. */
    protected ?string $houseNumber = '';

    /** The extension on the house number. */
    protected ?string $houseNumberExtension = '';

    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE
     * orders.
     */
    protected ?string $zipCode = '';

    /** The name of the city. */
    protected ?string $city = '';

    /** The country code. */
    protected ?string $countryCode = '';

    /** The company name. */
    protected ?string $company = '';

    /**
     * The Value Added Tax (VAT) / BTW number for business sellers situated
     * in the Netherlands.
     */
    protected ?string $vatNumber = '';

    /**
     * The Kamer van Koophandel (KvK) number for organizations situated in
     * the Netherlands or ondernemingsnummer for organizations situated in
     * Belgium.
     */
    protected ?string $kvkNumber = '';

    public function setSalutation(Salutation $salutation): self
    {
        $this->salutation = $salutation;
        return $this;
    }

    public function getSalutation(): Salutation
    {
        return $this->salutation;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setStreetName(?string $streetName): self
    {
        $this->streetName = $streetName;
        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getHouseNumber(): ?string
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

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setKvkNumber(?string $kvkNumber): self
    {
        $this->kvkNumber = $kvkNumber;
        return $this;
    }

    public function getKvkNumber(): ?string
    {
        return $this->kvkNumber;
    }
}
