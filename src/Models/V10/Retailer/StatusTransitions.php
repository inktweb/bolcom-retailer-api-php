<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\StatusTransitions\Status;

/**
 * @method static StatusTransitions fromArray(array $data)
 */
final class StatusTransitions extends Model
{
    /** Indicates the status of this invoice request. */
    protected Status $status;

    /**
     * The date and time in ISO 8601 format that indicates when this status
     * was updated for this invoice request.
     */
    protected string $statusDateTime = '';

    public function setStatus(Status $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setStatusDateTime(string $statusDateTime): self
    {
        $this->statusDateTime = $statusDateTime;
        return $this;
    }

    public function getStatusDateTime(): string
    {
        return $this->statusDateTime;
    }
}
