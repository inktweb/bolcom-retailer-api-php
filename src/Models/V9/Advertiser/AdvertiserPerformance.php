<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static AdvertiserPerformance fromArray(array $data)
 */
final class AdvertiserPerformance extends Model
{
    /** The date to which all campaign results are aggregated. */
    protected ?string $date = '';

    /** The total number of impressions for ads in all campaigns. */
    protected ?int $impressions = 0;

    /** The total number of clicks on ads in all campaigns. */
    protected ?int $clicks = 0;

    /**
     * The Click-Through Rate is a ratio of clicks versus impressions, with
     * four decimals of precision.
     */
    protected ?float $ctr = 0;

    /**
     * The value of sales in EUR that happened up to 14 days after the
     * visitor viewed an ad, with two decimals of precision.
     */
    protected ?float $sales = 0;

    /**
     * The total number of product sales that resulted from visitors viewing
     * ads, up to 14 days after they saw the ad.
     */
    protected ?int $conversions = 0;

    /**
     * The conversion rate is a ratio of the number of visitors who bought
     * the product up to 14 days after viewing the ad, versus those who only
     * viewed the ad, with four decimals of precision.
     */
    protected ?float $conversionRate = 0;

    /**
     * The total amount spent on all campaign ads in EUR, with two decimals
     * of precision.
     */
    protected ?float $spent = 0;

    /** The average Cost Per Click in EUR, with two decimals of precision. */
    protected ?float $cpc = 0;

    /**
     * The Advertising Cost of Sale is a ratio of the ad spend versus sales
     * revenue for all ads, with four decimals of precision.
     */
    protected ?float $acos = 0;

    /**
     * The Return on Advertising Spent is a ratio of sales revenue versus ad
     * spend, with four decimals of precision.
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

    public function setSales(?float $sales): self
    {
        $this->sales = $sales;
        return $this;
    }

    public function getSales(): ?float
    {
        return $this->sales;
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
