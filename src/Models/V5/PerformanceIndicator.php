<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static PerformanceIndicator fromArray(array $data)
 */
final class PerformanceIndicator extends Model
{
    /**
     * Indicator name.
     * @var string
     */
    protected $name;

    /**
     * Interpretation of the data that applies to this measurement.
     * @var string
     */
    protected $type;

    /** Details of the indicator. */
    protected $details;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setDetails($details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getDetails()
    {
        return $this->details;
    }
}
