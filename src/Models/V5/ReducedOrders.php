<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Container for many orders.
 * @method static ReducedOrders fromArray(array $data)
 */
final class ReducedOrders extends Model
{
    /** @var ReducedOrder[] */
    protected $orders = [];

    public function setOrders(ReducedOrder ...$orders): self
    {
        $this->orders = $orders;
        return $this;
    }

    public function getOrders(): array
    {
        return $this->orders;
    }
}
