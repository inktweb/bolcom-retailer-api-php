<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ChunkRecommendationsResponse fromArray(array $data)
 */
final class ChunkRecommendationsResponse extends Model
{
    /** @var ChunkRecommendationsPredictions[] */
    protected array $recommendations = [];

    public function setRecommendations(ChunkRecommendationsPredictions ...$recommendations): self
    {
        $this->recommendations = $recommendations;
        return $this;
    }

    public function getRecommendations(): array
    {
        return $this->recommendations;
    }
}
