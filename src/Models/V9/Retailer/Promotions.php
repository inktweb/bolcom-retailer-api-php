<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Container for multiple promotions.
 * @method static Promotions fromArray(array $data)
 */
final class Promotions extends Model
{
    /** @var ReducedPromotion[] */
    protected ?array $promotions = [];

    public function setPromotions(?ReducedPromotion ...$promotions): self
    {
        $this->promotions = $promotions;
        return $this;
    }

    public function getPromotions(): ?array
    {
        return $this->promotions;
    }
}
