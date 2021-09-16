<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\ReducedInvalidReplenishmentLine\Type;

/**
 * @method static ReducedInvalidReplenishmentLine fromArray(array $data)
 */
final class ReducedInvalidReplenishmentLine extends Model
{
    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot
     * be determined for this replenishment line.
     * @var Type
     */
    protected $type;

    public function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): Type
    {
        return $this->type;
    }
}
