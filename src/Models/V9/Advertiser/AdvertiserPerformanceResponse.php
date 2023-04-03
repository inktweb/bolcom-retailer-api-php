<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Container of multiple advertiser performance results aggregated per
 * day.
 * @method static AdvertiserPerformanceResponse fromArray(array $data)
 */
final class AdvertiserPerformanceResponse extends Model
{
    /** @var AdvertiserPerformance[] */
    protected array $advertiserPerformance = [];

    public function setAdvertiserPerformance(AdvertiserPerformance ...$advertiserPerformance): self
    {
        $this->advertiserPerformance = $advertiserPerformance;
        return $this;
    }

    public function getAdvertiserPerformance(): array
    {
        return $this->advertiserPerformance;
    }
}
