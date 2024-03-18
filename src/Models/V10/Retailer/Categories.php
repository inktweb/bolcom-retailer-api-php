<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The list of categories that are available to further narrow down
 * search results, for the given search term and category.
 * @method static Categories fromArray(array $data)
 */
final class Categories extends Model
{
    /** The name of the categories. */
    protected string $categoryName = '';

    /**
     * The list of available categories.
     * @var CategoryValues[]
     */
    protected array $categoryValues = [];

    public function setCategoryName(string $categoryName): self
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    public function setCategoryValues(CategoryValues ...$categoryValues): self
    {
        $this->categoryValues = $categoryValues;
        return $this;
    }

    public function getCategoryValues(): array
    {
        return $this->categoryValues;
    }
}