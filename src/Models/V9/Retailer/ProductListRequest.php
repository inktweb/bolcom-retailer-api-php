<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\ProductListRequest\CountryCode;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\ProductListRequest\Sort;

/**
 * @method static ProductListRequest fromArray(array $data)
 */
final class ProductListRequest extends Model
{
    /**
     * The country for which the products will be retrieved. Default value:
     * NL
     */
    protected ?CountryCode $countryCode = null;

    /** The search term to get the associated products for. */
    protected ?string $searchTerm = '';

    /** The category to get the associated products for. */
    protected ?string $categoryId = '';

    /**
     * The list of range filters to get associated products for.
     * @var ProductListFilterRange[]
     */
    protected ?array $filterRanges = [];

    /**
     * The list of filter values in this filter.
     * @var ProductListFilterValue[]
     */
    protected ?array $filterValues = [];

    /** Determines the order of the products. */
    protected ?Sort $sort = null;

    /** The requested page number with a page size of 50 items. */
    protected ?int $page = 0;

    public function setCountryCode(?CountryCode $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): ?CountryCode
    {
        return $this->countryCode;
    }

    public function setSearchTerm(?string $searchTerm): self
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

    public function getSearchTerm(): ?string
    {
        return $this->searchTerm;
    }

    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    public function setFilterRanges(?ProductListFilterRange ...$filterRanges): self
    {
        $this->filterRanges = $filterRanges;
        return $this;
    }

    public function getFilterRanges(): ?array
    {
        return $this->filterRanges;
    }

    public function setFilterValues(?ProductListFilterValue ...$filterValues): self
    {
        $this->filterValues = $filterValues;
        return $this;
    }

    public function getFilterValues(): ?array
    {
        return $this->filterValues;
    }

    public function setSort(?Sort $sort): self
    {
        $this->sort = $sort;
        return $this;
    }

    public function getSort(): ?Sort
    {
        return $this->sort;
    }

    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }
}
