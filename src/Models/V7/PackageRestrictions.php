<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PackageRestrictions fromArray(array $data)
 */
final class PackageRestrictions extends Model
{
    /**
     * The weight of a package.
     * @var string
     */
    protected $maxWeight = '';

    /**
     * The dimensions of a package.
     * @var string
     */
    protected $maxDimensions = '';

    public function setMaxWeight(string $maxWeight): self
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    public function getMaxWeight(): string
    {
        return $this->maxWeight;
    }

    public function setMaxDimensions(string $maxDimensions): self
    {
        $this->maxDimensions = $maxDimensions;
        return $this;
    }

    public function getMaxDimensions(): string
    {
        return $this->maxDimensions;
    }
}
