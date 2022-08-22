<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Countries fromArray(array $data)
 */
final class Countries extends Model
{
    /**
     * Countries in which this offer is currently on sale in the webshop, in
     * ISO-3166-1 format.
     * @var string
     */
    protected $countryCode = '';

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

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

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
