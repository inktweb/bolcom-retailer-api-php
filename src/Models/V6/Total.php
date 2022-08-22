<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Total fromArray(array $data)
 */
final class Total extends Model
{
    /**
     * Minimum number of estimated sales expectations on the bol.com
     * platform.
     * @var float
     */
    protected $minimum = 0;

    /**
     * Maximum number of estimated sales expectations on the bol.com
     * platform.
     * @var float
     */
    protected $maximum = 0;

    public function setMinimum(float $minimum): self
    {
        $this->minimum = $minimum;
        return $this;
    }

    public function getMinimum(): float
    {
        return $this->minimum;
    }

    public function setMaximum(float $maximum): self
    {
        $this->maximum = $maximum;
        return $this;
    }

    public function getMaximum(): float
    {
        return $this->maximum;
    }
}