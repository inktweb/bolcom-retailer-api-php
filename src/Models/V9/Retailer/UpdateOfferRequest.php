<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateOfferRequest fromArray(array $data)
 */
final class UpdateOfferRequest extends Model
{
    /**
     * A user-defined reference that helps you identify this particular offer
     * when receiving data from us. This element can optionally be left empty
     * and has a maximum amount of 20 characters.
     */
    protected ?string $reference = '';

    /**
     * Indicates whether or not you want to put this offer for sale on the
     * bol.com website. Defaults to false.
     */
    protected ?bool $onHoldByRetailer = false;

    /**
     * In case the item is not known to bol.com you can use this field to
     * identify this particular product. Note: in case the product is known
     * to bol.com, the unknown product title will not be stored.
     */
    protected ?string $unknownProductTitle = '';
    protected Fulfilment $fulfilment;

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setOnHoldByRetailer(?bool $onHoldByRetailer): self
    {
        $this->onHoldByRetailer = $onHoldByRetailer;
        return $this;
    }

    public function getOnHoldByRetailer(): ?bool
    {
        return $this->onHoldByRetailer;
    }

    public function setUnknownProductTitle(?string $unknownProductTitle): self
    {
        $this->unknownProductTitle = $unknownProductTitle;
        return $this;
    }

    public function getUnknownProductTitle(): ?string
    {
        return $this->unknownProductTitle;
    }

    public function setFulfilment(Fulfilment $fulfilment): self
    {
        $this->fulfilment = $fulfilment;
        return $this;
    }

    public function getFulfilment(): Fulfilment
    {
        return $this->fulfilment;
    }
}
