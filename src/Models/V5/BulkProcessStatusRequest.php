<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static BulkProcessStatusRequest fromArray(array $data)
 */
final class BulkProcessStatusRequest extends Model
{
    /** @var ProcessStatusId[] */
    protected $processStatusQueries = [];

    public function setProcessStatusQueries(ProcessStatusId ...$processStatusQueries): self
    {
        $this->processStatusQueries = $processStatusQueries;
        return $this;
    }

    public function getProcessStatusQueries(): array
    {
        return $this->processStatusQueries;
    }
}
