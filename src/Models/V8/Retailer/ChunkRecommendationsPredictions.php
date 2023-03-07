<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ChunkRecommendationsPredictions fromArray(array $data)
 */
final class ChunkRecommendationsPredictions extends Model
{
    /** @var ChunkRecommendationsPrediction[] */
    protected array $predictions = [];

    public function setPredictions(ChunkRecommendationsPrediction ...$predictions): self
    {
        $this->predictions = $predictions;
        return $this;
    }

    public function getPredictions(): array
    {
        return $this->predictions;
    }
}