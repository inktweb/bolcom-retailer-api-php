<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ChunkRecommendationsRequest fromArray(array $data)
 */
final class ChunkRecommendationsRequest extends Model
{
    /** @var ChunkRecommendationsAttributes[] */
    protected array $productContents = [];

    public function setProductContents(ChunkRecommendationsAttributes ...$productContents): self
    {
        $this->productContents = $productContents;
        return $this;
    }

    public function getProductContents(): array
    {
        return $this->productContents;
    }
}
