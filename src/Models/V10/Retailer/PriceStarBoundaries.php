<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PriceStarBoundaries fromArray(array $data)
 */
final class PriceStarBoundaries extends Model
{
    /**
     * The date and time in ISO 8601 format when boundaries updated for the
     * last time.
     */
    protected string $lastModifiedDateTime = '';

    /** @var PriceStarBoundaryLevels[] */
    protected array $priceStarBoundaryLevels = [];

    public function setLastModifiedDateTime(string $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): string
    {
        return $this->lastModifiedDateTime;
    }

    public function setPriceStarBoundaryLevels(PriceStarBoundaryLevels ...$priceStarBoundaryLevels): self
    {
        $this->priceStarBoundaryLevels = $priceStarBoundaryLevels;
        return $this;
    }

    public function getPriceStarBoundaryLevels(): array
    {
        return $this->priceStarBoundaryLevels;
    }
}