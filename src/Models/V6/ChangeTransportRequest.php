<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V6\ChangeTransportRequest\TransporterCode;

/**
 * @method static ChangeTransportRequest fromArray(array $data)
 */
final class ChangeTransportRequest extends Model
{
    /** @var TransporterCode */
    protected $transporterCode;

    /**
     * The track and trace code that is associated with this transport.
     * @var string
     */
    protected $trackAndTrace = '';

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