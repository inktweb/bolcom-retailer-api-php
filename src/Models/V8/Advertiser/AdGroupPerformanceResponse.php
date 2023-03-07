<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Container of multiple ad-group performance results aggregated per day.
 * @method static AdGroupPerformanceResponse fromArray(array $data)
 */
final class AdGroupPerformanceResponse extends Model
{
    /** @var AdGroupPerformance[] */
    protected array $adGroupPerformance = [];

    public function setAdGroupPerformance(AdGroupPerformance ...$adGroupPerformance): self
    {
        $this->adGroupPerformance = $adGroupPerformance;
        return $this;
    }

    public function getAdGroupPerformance(): array
    {
        return $this->adGroupPerformance;
    }
}