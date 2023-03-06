<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\ShipmentDetails\Language;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\ShipmentDetails\Salutation;

/**
 * The address details where this order needs to be shipped to. This can
 * be the customers' own address, a (company) business address or a Pick
 * Up Point address.
 * @method static ShipmentDetails fromArray(array $data)
 */
final class ShipmentDetails extends Model
{
    /** The name of Pick Up Point location this order needs to be shipped to. */
    protected string $pickupPointName = '';

    /** The salutation of the customer. */
    protected Salutation $salutation;

    /** The first name of the customer. */
    protected string $firstName = '';

    /** The surname of the customer. */
    protected string $surname = '';

    /** The street name. */
    protected string $streetName = '';

    /** The house number. */
    protected string $houseNumber = '';

    /** The extension on the house number. */
    protected string $houseNumberExtension = '';

    /**
     * Additional information related to the address that helps in delivering
     * the package.
     */
    protected string $extraAddressInformation = '';

    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE
     * orders.
     */
    protected string $zipCode = '';

    /** The name of the city. */
    protected string $city = '';

    /** The country code. */
    protected string $countryCode = '';

    /** A scrambled email address that can be used to contact the customer. */
    protected string $email = '';

    /** The company name. */
    protected string $company = '';

    /**
     * The delivery phone number of the customer. Filled in case the order
     * requires an appointment for delivering the goods.
     */
    protected string $deliveryPhoneNumber = '';

    /** The language of the customer in case of contact. */
    protected Language $language;

    public function setPickupPointName(?string $pickupPointName): self
    {
        $this->pickupPointName = $pickupPointName;
        return $this;
    }

    public function getPickupPointName(): ?string
    {
        return $this->pickupPointName;
    }

    public function setSalutation(?Salutation $salutation): self
    {
        $this->salutation = $salutation;
        return $this;
    }

    public function getSalutation(): ?Salutation
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

    public function setExtraAddressInformation(?string $extraAddressInformation): self
    {
        $this->extraAddressInformation = $extraAddressInformation;
        return $this;
    }

    public function getExtraAddressInformation(): ?string
    {
        return $this->extraAddressInformation;
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

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
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

    public function setDeliveryPhoneNumber(?string $deliveryPhoneNumber): self
    {
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;
        return $this;
    }

    public function getDeliveryPhoneNumber(): ?string
    {
        return $this->deliveryPhoneNumber;
    }

    public function setLanguage(?Language $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getLanguage(): ?Language
    {
        return $this->language;
    }
}
