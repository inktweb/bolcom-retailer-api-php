<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Apis
 */

namespace Inktweb\Bolcom\RetailerApi\Apis\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Api;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\AdGroups;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\Assortments;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\Campaigns;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\Keywords;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\NegativeKeywords;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\Reporting;
use Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser\TargetProducts;

final class Advertiser extends Api
{
    protected Assortments $assortments;
    protected Reporting $reporting;
    protected AdGroups $adGroups;
    protected Campaigns $campaigns;
    protected Keywords $keywords;
    protected NegativeKeywords $negativeKeywords;
    protected TargetProducts $targetProducts;

    public function assortments(): Assortments
    {
        return $this->assortments
            ?? $this->assortments = new Assortments($this->client);
    }

    public function reporting(): Reporting
    {
        return $this->reporting
            ?? $this->reporting = new Reporting($this->client);
    }

    public function adGroups(): AdGroups
    {
        return $this->adGroups
            ?? $this->adGroups = new AdGroups($this->client);
    }

    public function campaigns(): Campaigns
    {
        return $this->campaigns
            ?? $this->campaigns = new Campaigns($this->client);
    }

    public function keywords(): Keywords
    {
        return $this->keywords
            ?? $this->keywords = new Keywords($this->client);
    }

    public function negativeKeywords(): NegativeKeywords
    {
        return $this->negativeKeywords
            ?? $this->negativeKeywords = new NegativeKeywords($this->client);
    }

    public function targetProducts(): TargetProducts
    {
        return $this->targetProducts
            ?? $this->targetProducts = new TargetProducts($this->client);
    }
}
