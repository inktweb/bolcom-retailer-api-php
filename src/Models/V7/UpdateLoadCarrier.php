<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateLoadCarrier fromArray(array $data)
 */
final class UpdateLoadCarrier extends Model
{
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     * @var string
     */
    protected $sscc = '';

    public function setSscc(?string $sscc): self
    {
        $this->sscc = $sscc;
        return $this;
    }

    public function getSscc(): ?string
    {
        return $this->sscc;
    }
}
