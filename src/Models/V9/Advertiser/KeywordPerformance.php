<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static KeywordPerformance fromArray(array $data)
 */
final class KeywordPerformance extends Model
{
    /** The identifier of the parent-campaign for this ad group. */
    protected ?string $campaignId = '';

    /** The identifier of the ad group. */
    protected string $adGroupId = '';

    /** The identifier of the adgroup. */
    protected ?string $keywordId = '';

    /**
     * The text or phrase used in the keyword that caused the ad to be
     * displayed to the user.
     */
    protected ?string $keywordText = '';

    /** The number of impressions from this keyword for ads in the ad group. */
    protected ?int $impressions = 0;

    /** The number of clicks from this keyword on ads in the ad group. */
    protected ?int $clicks = 0;

    /**
     * The Click-Through Rate is a ratio of clicks versus impressions from
     * this keyword, with four decimals of precision.
     */
    protected ?float $ctr = 0;

    /**
     * The number of product sales that resulted from visitors viewing ads
     * with this keyword, up to 14 days after they viewed the ad.
     */
    protected ?int $conversions = 0;

    /**
     * The conversion rate is a ratio of the number of visitors who bought
     * the product up to 14 days after viewing the ad with this keyword,
     * versus those who only viewed the ad, with four decimals of precision.
     */
    protected ?float $conversionRate = 0;

    /**
     * The value of sales in EUR that happened up to 14 days after the
     * visitor viewed an ad with this keyword, with two decimals of
     * precision.
     */
    protected ?float $sales = 0;

    /**
     * The amount spent on ads with this keyword in EUR, with two decimals of
     * precision.
     */
    protected ?float $spent = 0;

    /**
     * The average Cost Per Click of ads with this keyword in EUR, with two
     * decimals of precision.
     */
    protected ?float $cpc = 0;

    /**
     * The Advertising Cost Of Sale for the ads with this keyword is a ratio
     * of the ad spend versus sales revenue, with four decimals of precision.
     */
    protected ?float $acos = 0;

    /**
     * The Return on Advertising Spent for ads with this keyword is a ratio
     * of sales revenue versus ad spend, with four decimals of precision.
     */
    protected ?float $roas = 0;

    /**
     * The value of the average winning bid for ads that used this keyword in
     * the ad group in EUR, with two decimals of precision.
     */
    protected ?float $averageWinningBid = 0;

    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    public function getCampaignId(): ?string
    {
        return $this->campaignId;
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

    public function setKeywordId(?string $keywordId): self
    {
        $this->keywordId = $keywordId;
        return $this;
    }

    public function getKeywordId(): ?string
    {
        return $this->keywordId;
    }

    public function setKeywordText(?string $keywordText): self
    {
        $this->keywordText = $keywordText;
        return $this;
    }

    public function getKeywordText(): ?string
    {
        return $this->keywordText;
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

    public function setAverageWinningBid(?float $averageWinningBid): self
    {
        $this->averageWinningBid = $averageWinningBid;
        return $this;
    }

    public function getAverageWinningBid(): ?float
    {
        return $this->averageWinningBid;
    }
}
