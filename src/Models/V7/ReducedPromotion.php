<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\ReducedPromotion\PromotionType;

/**
 * A single promotion.
 * @method static ReducedPromotion fromArray(array $data)
 */
final class ReducedPromotion extends Model
{
    /**
     * The identifier of the promotion.
     * @var string
     */
    protected $promotionId = '';

    /**
     * The title of the promotion.
     * @var string
     */
    protected $title = '';

    /**
     * The starting date and time of the promotion.
     * @var string
     */
    protected $startDateTime = '';

    /**
     * The ending date and time of the promotion.
     * @var string
     */
    protected $endDateTime = '';

    /** @var CountryCode[] */
    protected $countries = [];

    /**
     * The type of the promotion.
     * @var PromotionType
     */
    protected $promotionType;

    /**
     * Indicates whether the promotion is retailer specific or open to the
     * platform.
     * @var bool
     */
    protected $retailerSpecificPromotion = false;

    /** @var Campaign */
    protected $campaign;

    public function setPromotionId(string $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    public function getPromotionId(): string
    {
        return $this->promotionId;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setStartDateTime(string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getStartDateTime(): string
    {
        return $this->startDateTime;
    }

    public function setEndDateTime(string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getEndDateTime(): string
    {
        return $this->endDateTime;
    }

    public function setCountries(CountryCode ...$countries): self
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setPromotionType(PromotionType $promotionType): self
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    public function getPromotionType(): PromotionType
    {
        return $this->promotionType;
    }

    public function setRetailerSpecificPromotion(?bool $retailerSpecificPromotion): self
    {
        $this->retailerSpecificPromotion = $retailerSpecificPromotion;
        return $this;
    }

    public function getRetailerSpecificPromotion(): ?bool
    {
        return $this->retailerSpecificPromotion;
    }

    public function setCampaign(?Campaign $campaign): self
    {
        $this->campaign = $campaign;
        return $this;
    }

    public function getCampaign(): ?Campaign
    {
        return $this->campaign;
    }
}
