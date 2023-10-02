<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The configuration of order items to get delivery options for.
 * @method static DeliveryOptionsRequest fromArray(array $data)
 */
final class DeliveryOptionsRequest extends Model
{
    /**
     * Order items for which the delivery options are requested.
     * @var DeliveryOptionsRequestOrderItem[]
     */
    protected array $orderItems = [];

    public function setOrderItems(DeliveryOptionsRequestOrderItem ...$orderItems): self
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
}
