<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\PerformanceIndicator\Name;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\PerformanceIndicator\Type;

/**
 * @method static PerformanceIndicator fromArray(array $data)
 */
final class PerformanceIndicator extends Model
{
    /**
     * Indicator name.
     * @var Name
     */
    protected $name;

    /**
     * Interpretation of the data that applies to this measurement.
     * @var Type
     */
    protected $type;

    /**
     * Details of the indicator.
     * @var Details
     */
    protected $details;

    public function setName(Name $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setDetails(Details $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getDetails(): Details
    {
        return $this->details;
    }
}
