<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static BulkCommissionResponse fromArray(array $data)
 */
final class BulkCommissionResponse extends Model
{
    /** @var Commission[] */
    protected array $commissions = [];

    public function setCommissions(Commission ...$commissions): self
    {
        $this->commissions = $commissions;
        return $this;
    }

    public function getCommissions(): array
    {
        return $this->commissions;
    }
}
