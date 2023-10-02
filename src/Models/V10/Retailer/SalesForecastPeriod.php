<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static SalesForecastPeriod fromArray(array $data)
 */
final class SalesForecastPeriod extends Model
{
    /** The number of weeks into the future, starting from today. */
    protected int $weeksAhead = 0;
    protected Total $total;

    /** @var Countries[] */
    protected array $countries = [];

    public function setWeeksAhead(int $weeksAhead): self
    {
        $this->weeksAhead = $weeksAhead;
        return $this;
    }

    public function getWeeksAhead(): int
    {
        return $this->weeksAhead;
    }

    public function setTotal(Total $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal(): Total
    {
        return $this->total;
    }

    public function setCountries(Countries ...$countries): self
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(): array
    {
        return $this->countries;
    }
}
