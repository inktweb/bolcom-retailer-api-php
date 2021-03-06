<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Information related to the customer.
 * @method static CustomerDetails fromArray(array $data)
 */
final class CustomerDetails extends Model
{
    /**
     * The salutation of the customer.
     * @var string
     */
    protected $salutationCode = '';

    /**
     * The first name of the customer.
     * @var string
     */
    protected $firstName = '';

    /**
     * The surname of the customer.
     * @var string
     */
    protected $surname = '';

    /**
     * The street name.
     * @var string
     */
    protected $streetName = '';

    /**
     * The house number.
     * @var string
     */
    protected $houseNumber = '';

    /**
     * The extension on the house number.
     * @var string
     */
    protected $houseNumberExtended = '';

    /**
     * Additional information related to the address that helps in delivering
     * the package.
     * @var string
     */
    protected $extraAddressInformation = '';

    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE
     * orders.
     * @var string
     */
    protected $zipCode = '';

    /**
     * The name of the city.
     * @var string
     */
    protected $city = '';

    /**
     * The country code.
     * @var string
     */
    protected $countryCode = '';

    /**
     * A scrambled email address that can be used to contact the customer.
     * @var string
     */
    protected $email = '';

    /**
     * The delivery phone number of the customer. Filled in case the order
     * requires an appointment for delivering the goods.
     * @var string
     */
    protected $deliveryPhoneNumber = '';

    /**
     * The company name.
     * @var string
     */
    protected $company = '';

    /**
     * The Value Added Tax (VAT) / BTW number for business sellers situated
     * in the Netherlands.
     * @var string
     */
    protected $vatNumber = '';

    public function setSalutationCode(?string $salutationCode): self
    {
        $this->salutationCode = $salutationCode;
        return $this;
    }

    public function getSalutationCode(): ?string
    {
        return $this->salutationCode;
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

    public function setHouseNumberExtended(?string $houseNumberExtended): self
    {
        $this->houseNumberExtended = $houseNumberExtended;
        return $this;
    }

    public function getHouseNumberExtended(): ?string
    {
        return $this->houseNumberExtended;
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

    public function setDeliveryPhoneNumber(?string $deliveryPhoneNumber): self
    {
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;
        return $this;
    }

    public function getDeliveryPhoneNumber(): ?string
    {
        return $this->deliveryPhoneNumber;
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
}
