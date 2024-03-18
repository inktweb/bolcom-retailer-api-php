<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProductRatingsRating fromArray(array $data)
 */
final class ProductRatingsRating extends Model
{
    /** Scale of the rating provided by the customer. */
    protected int $rating = 0;

    /** The number of ratings for the corresponding scale. */
    protected ?int $count = 0;

    public function setRating(int $rating): self
    {
        $this->rating = $rating;
        return $this;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }
}