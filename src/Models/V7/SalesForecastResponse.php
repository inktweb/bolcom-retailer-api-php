<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static SalesForecastResponse fromArray(array $data)
 */
final class SalesForecastResponse extends Model
{
    /**
     * Indicator name.
     * @var string
     */
    protected $name = '';

    /**
     * Interpretation of the data that applies to this measurement.
     * @var string
     */
    protected $type = '';

    /** @var Total */
    protected $total;

    /** @var Countries[] */
    protected $countries = [];

    /** @var SalesForecastPeriod[] */
    protected $periods = [];

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

    public function setPeriods(SalesForecastPeriod ...$periods): self
    {
        $this->periods = $periods;
        return $this;
    }

    public function getPeriods(): array
    {
        return $this->periods;
    }
}
