<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static SearchTerm fromArray(array $data)
 */
final class SearchTerm extends Model
{
    /**
     * The search term for which you requested the search volume.
     * @var string
     */
    protected $searchTerm = '';

    /**
     * Interpretation of the data that applies to this measurement.
     * @var string
     */
    protected $type = '';

    /**
     * The number of customer visits on the search page.
     * @var int
     */
    protected $total = 0;

    /** @var SearchTermsCountry[] */
    protected $countries = [];

    /** @var TotalPeriod[] */
    protected $periods = [];

    /** @var RelatedSearchTerm[] */
    protected $relatedSearchTerms = [];

    public function setSearchTerm(string $searchTerm): self
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

    public function getSearchTerm(): string
    {
        return $this->searchTerm;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setCountries(SearchTermsCountry ...$countries): self
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setPeriods(TotalPeriod ...$periods): self
    {
        $this->periods = $periods;
        return $this;
    }

    public function getPeriods(): array
    {
        return $this->periods;
    }

    public function setRelatedSearchTerms(?RelatedSearchTerm ...$relatedSearchTerms): self
    {
        $this->relatedSearchTerms = $relatedSearchTerms;
        return $this;
    }

    public function getRelatedSearchTerms(): ?array
    {
        return $this->relatedSearchTerms;
    }
}
