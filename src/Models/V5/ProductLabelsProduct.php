<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProductLabelsProduct fromArray(array $data)
 */
final class ProductLabelsProduct extends Model
{
    /**
     * The EAN number associated with this product.
     * @var string
     */
    protected $ean;

    /**
     * The number of products to generate labels for.
     * @var int
     */
    protected $quantity;

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}