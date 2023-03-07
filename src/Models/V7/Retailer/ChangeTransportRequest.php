<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\ChangeTransportRequest\TransporterCode;

/**
 * @method static ChangeTransportRequest fromArray(array $data)
 */
final class ChangeTransportRequest extends Model
{
    protected ?TransporterCode $transporterCode = null;

    /** The track and trace code that is associated with this transport. */
    protected ?string $trackAndTrace = '';

    public function setTransporterCode(?TransporterCode $transporterCode): self
    {
        $this->transporterCode = $transporterCode;
        return $this;
    }

    public function getTransporterCode(): ?TransporterCode
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
