<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateKeywordRequest fromArray(array $data)
 */
final class UpdateKeywordRequest extends Model
{
    /** The bid price. The price should always have two decimals of precision. */
    protected float $bid = 0;

    public function setBid(float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    public function getBid(): float
    {
        return $this->bid;
    }
}