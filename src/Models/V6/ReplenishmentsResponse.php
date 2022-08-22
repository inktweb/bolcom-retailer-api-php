<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReplenishmentsResponse fromArray(array $data)
 */
final class ReplenishmentsResponse extends Model
{
    /** @var ReducedReplenishment[] */
    protected $replenishments = [];

    public function setReplenishments(ReducedReplenishment ...$replenishments): self
    {
        $this->replenishments = $replenishments;
        return $this;
    }

    public function getReplenishments(): array
    {
        return $this->replenishments;
    }
}