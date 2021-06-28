<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedInvalidReplenishmentLine fromArray(array $data)
 */
final class ReducedInvalidReplenishmentLine extends Model
{
    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot
     * be determined for this replenishment line.
     * @var string
     */
    protected $type;

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}