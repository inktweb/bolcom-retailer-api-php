<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V8\Advertiser\CreateCampaignRequest\State;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V8\Advertiser\CreateCampaignRequest\TargetingType;

/**
 * @method static CreateCampaignRequest fromArray(array $data)
 */
final class CreateCampaignRequest extends Model
{
    /** The name of the campaign. */
    protected string $name = '';

    /**
     * The start date of the campaign. Must be a current or future date and
     * will always be one full day.
     */
    protected string $startDate = '';

    /**
     * The end date of the campaign. Must be a future date that is at least
     * one day after the start date of the campaign, and will always be one
     * full day.
     */
    protected string $endDate = '';

    /** The state of the campaign. */
    protected State $state;

    /** The type of keyword targeting for the campaign. */
    protected TargetingType $targetingType;

    /**
     * The maximum amount that can be spend in one day for this campaign. The
     * amount should always have two decimals precision.
     */
    protected float $dailyBudget = 0;

    /**
     * The total budget that can be spend for this campaign. The amount
     * should always have two decimals precision.
     */
    protected float $totalBudget = 0;

    /** @var CampaignCountry[] */
    protected array $countries = [];
    protected CreateBiddingModel $bidding;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setStartDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    public function setState(State $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function setTargetingType(TargetingType $targetingType): self
    {
        $this->targetingType = $targetingType;
        return $this;
    }

    public function getTargetingType(): TargetingType
    {
        return $this->targetingType;
    }

    public function setDailyBudget(?float $dailyBudget): self
    {
        $this->dailyBudget = $dailyBudget;
        return $this;
    }

    public function getDailyBudget(): ?float
    {
        return $this->dailyBudget;
    }

    public function setTotalBudget(?float $totalBudget): self
    {
        $this->totalBudget = $totalBudget;
        return $this;
    }

    public function getTotalBudget(): ?float
    {
        return $this->totalBudget;
    }

    public function setCountries(CampaignCountry ...$countries): self
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setBidding(CreateBiddingModel $bidding): self
    {
        $this->bidding = $bidding;
        return $this;
    }

    public function getBidding(): CreateBiddingModel
    {
        return $this->bidding;
    }
}
