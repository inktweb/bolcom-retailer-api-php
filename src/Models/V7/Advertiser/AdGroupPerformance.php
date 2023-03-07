<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static AdGroupPerformance fromArray(array $data)
 */
final class AdGroupPerformance extends Model
{
    /** The date to which the ad group results are aggregated. */
    protected ?string $date = '';

    /** The identifier of the ad group. */
    protected string $adGroupId = '';

    /** The name of the ad group. */
    protected ?string $adGroupName = '';

    /** Unique identifier for the campaign. */
    protected ?string $campaignId = '';

    /** The number of impressions for ads in the ad group. */
    protected ?int $impressions = 0;

    /** The number of clicks on ads in the ad group. */
    protected ?int $clicks = 0;

    /**
     * The Click-Through Rate is a ratio of clicks versus impressions, with
     * four decimals of precision.
     */
    protected ?float $ctr = 0;

    /**
     * The number of product sales that resulted from visitors viewing ads,
     * up to 14 days after they viewed the ad.
     */
    protected ?int $conversions = 0;

    /**
     * The conversion rate is a ratio of the number of visitors who bought
     * the product up to 14 days after viewing the ad, versus those who only
     * viewed the ad, with four decimals of precision.
     */
    protected ?float $conversionRate = 0;

    /**
     * The value of sales in EUR that happened up to 14 days after the
     * visitor viewed an ad, with two decimals of precision.
     */
    protected ?float $sales = 0;

    /**
     * The number of conversions of similar products with a different EAN up
     * to 14 days after a visitor viewed an ad.
     */
    protected ?int $conversionsOtherEan = 0;

    /**
     * The value of sales in EUR of similar products with a different EAN up
     * to 14 days after a visitor viewed an ad, with two decimals of
     * precision.
     */
    protected ?float $salesOtherEan = 0;

    /**
     * The amount spent on the ad group in EUR, with two decimals of
     * precision.
     */
    protected ?float $spent = 0;

    /** The average Cost Per Click in EUR, with two decimals of precision. */
    protected ?float $cpc = 0;

    /**
     * The Advertising Cost Of Sale for the ad group is a ratio of the ad
     * spend versus sales revenue, with four decimals of precision.
     */
    protected ?float $acos = 0;

    /**
     * The Return on Advertising Spent for the ad group is a ratio of sales
     * revenue versus ad spend, with four decimals of precision.
     */
    protected ?float $roas = 0;

    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setAdGroupId(string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;
        return $this;
    }

    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    public function setAdGroupName(?string $adGroupName): self
    {
        $this->adGroupName = $adGroupName;
        return $this;
    }

    public function getAdGroupName(): ?string
    {
        return $this->adGroupName;
    }

    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    public function setImpressions(?int $impressions): self
    {
        $this->impressions = $impressions;
        return $this;
    }

    public function getImpressions(): ?int
    {
        return $this->impressions;
    }

    public function setClicks(?int $clicks): self
    {
        $this->clicks = $clicks;
        return $this;
    }

    public function getClicks(): ?int
    {
        return $this->clicks;
    }

    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    public function setConversions(?int $conversions): self
    {
        $this->conversions = $conversions;
        return $this;
    }

    public function getConversions(): ?int
    {
        return $this->conversions;
    }

    public function setConversionRate(?float $conversionRate): self
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }

    public function setSales(?float $sales): self
    {
        $this->sales = $sales;
        return $this;
    }

    public function getSales(): ?float
    {
        return $this->sales;
    }

    public function setConversionsOtherEan(?int $conversionsOtherEan): self
    {
        $this->conversionsOtherEan = $conversionsOtherEan;
        return $this;
    }

    public function getConversionsOtherEan(): ?int
    {
        return $this->conversionsOtherEan;
    }

    public function setSalesOtherEan(?float $salesOtherEan): self
    {
        $this->salesOtherEan = $salesOtherEan;
        return $this;
    }

    public function getSalesOtherEan(): ?float
    {
        return $this->salesOtherEan;
    }

    public function setSpent(?float $spent): self
    {
        $this->spent = $spent;
        return $this;
    }

    public function getSpent(): ?float
    {
        return $this->spent;
    }

    public function setCpc(?float $cpc): self
    {
        $this->cpc = $cpc;
        return $this;
    }

    public function getCpc(): ?float
    {
        return $this->cpc;
    }

    public function setAcos(?float $acos): self
    {
        $this->acos = $acos;
        return $this;
    }

    public function getAcos(): ?float
    {
        return $this->acos;
    }

    public function setRoas(?float $roas): self
    {
        $this->roas = $roas;
        return $this;
    }

    public function getRoas(): ?float
    {
        return $this->roas;
    }
}
