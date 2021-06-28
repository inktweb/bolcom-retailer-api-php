<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static OrderOffer fromArray(array $data)
 */
final class OrderOffer extends Model
{
    /**
     * Unique identifier for an offer.
     * @var string
     */
    protected $offerId;

    /**
     * A user-defined reference tied to the offer upon creating the offer.
     * @var string
     */
    protected $reference;

    public function setOfferId(?string $offerId): self
    {
        $this->offerId = $offerId;
        return $this;
    }

    public function getOfferId(): ?string
    {
        return $this->offerId;
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
}
