<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static TransportInstruction fromArray(array $data)
 */
final class TransportInstruction extends Model
{
    /** Specify the transporter that will carry out the shipment. */
    protected ?string $transporterCode = '';

    /** The track and trace code that is associated with this transport. */
    protected ?string $trackAndTrace = '';

    public function setTransporterCode(?string $transporterCode): self
    {
        $this->transporterCode = $transporterCode;
        return $this;
    }

    public function getTransporterCode(): ?string
    {
        return $this->transporterCode;
    }

    public function setTrackAndTrace(?string $trackAndTrace): self
    {
        $this->trackAndTrace = $trackAndTrace;
        return $this;
    }

    public function getTrackAndTrace(): ?string
    {
        return $this->trackAndTrace;
    }
}
