<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
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
