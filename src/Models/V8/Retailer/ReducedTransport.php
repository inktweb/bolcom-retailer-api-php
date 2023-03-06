<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedTransport fromArray(array $data)
 */
final class ReducedTransport extends Model
{
    /** The transport id. */
    protected string $transportId = '';

    public function setTransportId(?string $transportId): self
    {
        $this->transportId = $transportId;
        return $this;
    }

    public function getTransportId(): ?string
    {
        return $this->transportId;
    }
}
