<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateBiddingModel fromArray(array $data)
 */
final class UpdateBiddingModel extends Model
{
    /**
     * Only required when the bidding strategy is set to AUTO. When provided,
     * the bidding strategy will attempt to reach this ACoS. The format is a
     * number without decimals that represents a percentage.
     */
    protected ?int $automaticBidDesiredAcosPercentage = 0;

    /**
     * The default bid price. The price should always have two decimals
     * precision.
     */
    protected ?float $defaultBid = 0;

    public function setAutomaticBidDesiredAcosPercentage(?int $automaticBidDesiredAcosPercentage): self
    {
        $this->automaticBidDesiredAcosPercentage = $automaticBidDesiredAcosPercentage;
        return $this;
    }

    public function getAutomaticBidDesiredAcosPercentage(): ?int
    {
        return $this->automaticBidDesiredAcosPercentage;
    }

    public function setDefaultBid(?float $defaultBid): self
    {
        $this->defaultBid = $defaultBid;
        return $this;
    }

    public function getDefaultBid(): ?float
    {
        return $this->defaultBid;
    }
}
