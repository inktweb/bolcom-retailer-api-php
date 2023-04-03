<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Container of multiple key word performance results aggregated to the
 * period requested.
 * @method static KeywordPerformanceResponse fromArray(array $data)
 */
final class KeywordPerformanceResponse extends Model
{
    /** @var KeywordPerformance[] */
    protected array $keywordPerformance = [];

    public function setKeywordPerformance(KeywordPerformance ...$keywordPerformance): self
    {
        $this->keywordPerformance = $keywordPerformance;
        return $this;
    }

    public function getKeywordPerformance(): array
    {
        return $this->keywordPerformance;
    }
}
