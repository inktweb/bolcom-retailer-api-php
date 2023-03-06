<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static OfferInsightsPeriod fromArray(array $data)
 */
final class OfferInsightsPeriod extends Model
{
    /** Day of the month. */
    protected int $day = 0;

    /** Week of the year. */
    protected int $week = 0;

    /** Month of the year. */
    protected int $month = 0;

    /** Year. */
    protected int $year = 0;

    public function setDay(?int $day): self
    {
        $this->day = $day;
        return $this;
    }

    public function getDay(): ?int
    {
        return $this->day;
    }

    public function setWeek(?int $week): self
    {
        $this->week = $week;
        return $this;
    }

    public function getWeek(): ?int
    {
        return $this->week;
    }

    public function setMonth(?int $month): self
    {
        $this->month = $month;
        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
