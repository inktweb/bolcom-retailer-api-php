<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Shared;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ProcessStatusResponse fromArray(array $data)
 */
final class ProcessStatusResponse extends Model
{
    /** @var ProcessStatus[] */
    protected array $processStatuses = [];

    public function setProcessStatuses(ProcessStatus ...$processStatuses): self
    {
        $this->processStatuses = $processStatuses;
        return $this;
    }

    public function getProcessStatuses(): array
    {
        return $this->processStatuses;
    }
}
