<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static RetailerOffer fromArray(array $data)
 */
final class RetailerOffer extends Model
{
    /**
     * Unique identifier for an offer.
     * @var string
     */
    protected $offerId;

    /**
     * The EAN number associated with this product. Note: in case an ISBN is
     * provided, the ISBN will be replaced with the actual EAN belonging to
     * this ISBN.
     * @var string
     */
    protected $ean;

    /**
     * A user-defined reference that helps you identify this particular offer
     * when receiving data from us. This element can optionally be left empty
     * and has a maximum amount of 20 characters.
     * @var string
     */
    protected $reference;

    /**
     * Indicates whether or not you want to put this offer for sale on the
     * bol.com website. Defaults to false.
     * @var bool
     */
    protected $onHoldByRetailer;

    /**
     * In case the item is not known to bol.com you can use this field to
     * identify this particular product. Note: in case the product is known
     * to bol.com, the unknown product title will not be stored.
     * @var string
     */
    protected $unknownProductTitle;
    protected $pricing;
    protected $stock;
    protected $fulfilment;
    protected $store;
    protected $condition;

    /** @var NotPublishableReason[] */
    protected $notPublishableReasons;

    public function setOfferId(string $offerId): self
    {
        $this->offerId = $offerId;
        return $this;
    }

    public function getOfferId(): string
    {
        return $this->offerId;
    }

    public function setEan(string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setOnHoldByRetailer(bool $onHoldByRetailer): self
    {
        $this->onHoldByRetailer = $onHoldByRetailer;
        return $this;
    }

    public function getOnHoldByRetailer(): bool
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

    public function setPricing($pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    public function getPricing()
    {
        return $this->pricing;
    }

    public function setStock($stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setFulfilment($fulfilment): self
    {
        $this->fulfilment = $fulfilment;
        return $this;
    }

    public function getFulfilment()
    {
        return $this->fulfilment;
    }

    public function setStore($store): self
    {
        $this->store = $store;
        return $this;
    }

    public function getStore()
    {
        return $this->store;
    }

    public function setCondition($condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function getCondition()
    {
        return $this->condition;
    }

    public function setNotPublishableReasons(NotPublishableReason $notPublishableReasons): self
    {
        $this->notPublishableReasons = $notPublishableReasons;
        return $this;
    }

    public function getNotPublishableReasons(): array
    {
        return $this->notPublishableReasons;
    }
}
