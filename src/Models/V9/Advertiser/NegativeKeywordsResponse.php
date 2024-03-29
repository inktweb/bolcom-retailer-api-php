<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static NegativeKeywordsResponse fromArray(array $data)
 */
final class NegativeKeywordsResponse extends Model
{
    /** @var NegativeKeyword[] */
    protected array $negativeKeywords = [];

    public function setNegativeKeywords(NegativeKeyword ...$negativeKeywords): self
    {
        $this->negativeKeywords = $negativeKeywords;
        return $this;
    }

    public function getNegativeKeywords(): array
    {
        return $this->negativeKeywords;
    }
}
