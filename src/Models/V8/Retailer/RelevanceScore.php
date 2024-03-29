<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V8\Retailer\RelevanceScore\CountryCode;

/**
 * The relevance score of a product in a promotion.
 * @method static RelevanceScore fromArray(array $data)
 */
final class RelevanceScore extends Model
{
    /** The country for which the relevance score has been calculated against. */
    protected ?CountryCode $countryCode = null;

    /** The calculated relevance score for the product. */
    protected ?int $relevanceScore = 0;

    public function setCountryCode(?CountryCode $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): ?CountryCode
    {
        return $this->countryCode;
    }

    public function setRelevanceScore(?int $relevanceScore): self
    {
        $this->relevanceScore = $relevanceScore;
        return $this;
    }

    public function getRelevanceScore(): ?int
    {
        return $this->relevanceScore;
    }
}
