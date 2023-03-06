<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Shared;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProcessStatusId fromArray(array $data)
 */
final class ProcessStatusId extends Model
{
    /** The process status id. */
    protected string $processStatusId = '';

    public function setProcessStatusId(?string $processStatusId): self
    {
        $this->processStatusId = $processStatusId;
        return $this;
    }

    public function getProcessStatusId(): ?string
    {
        return $this->processStatusId;
    }
}
