<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedTransport fromArray(array $data)
 */
final class ReducedTransport extends Model
{
    /**
     * The transport id.
     * @var int
     */
    protected $transportId;

    public function setTransportId(?int $transportId): self
    {
        $this->transportId = $transportId;
        return $this;
    }

    public function getTransportId(): ?int
    {
        return $this->transportId;
    }
}