<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static RelatedSearchTerm fromArray(array $data)
 */
final class RelatedSearchTerm extends Model
{
    /** The number of customer visits on the search page. */
    protected int $total = 0;

    /** The search term for which you requested the search volume. */
    protected string $searchTerm = '';

    public function setTotal(int $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setSearchTerm(string $searchTerm): self
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }

    public function getSearchTerm(): string
    {
        return $this->searchTerm;
    }
}
