<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Details fromArray(array $data)
 */
final class Details extends Model
{
    /** The period for which the performance is measured. */
    protected PerformanceIndicatorPeriod $period;

    /**
     * The score for this measurement. In case there are no scores for an
     * indicator, this element is omitted from the response.
     */
    protected ?Score $score = null;

    /** Service norm for this indicator. */
    protected Norm $norm;

    public function setPeriod(PerformanceIndicatorPeriod $period): self
    {
        $this->period = $period;
        return $this;
    }

    public function getPeriod(): PerformanceIndicatorPeriod
    {
        return $this->period;
    }

    public function setScore(?Score $score): self
    {
        $this->score = $score;
        return $this;
    }

    public function getScore(): ?Score
    {
        return $this->score;
    }

    public function setNorm(Norm $norm): self
    {
        $this->norm = $norm;
        return $this;
    }

    public function getNorm(): Norm
    {
        return $this->norm;
    }
}
