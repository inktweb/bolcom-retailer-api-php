<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The configuration of order items to get delivery options for.
 * @method static ShippingLabelRequest fromArray(array $data)
 */
final class ShippingLabelRequest extends Model
{
    /**
     * Order items for which the delivery options are requested.
     * @var OrderItem[]
     */
    protected $orderItems = [];

    /**
     * Shipping label offer id for which you request a shipping label.
     * @var string
     */
    protected $shippingLabelOfferId = '';

    public function setOrderItems(OrderItem ...$orderItems): self
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    public function setShippingLabelOfferId(string $shippingLabelOfferId): self
    {
        $this->shippingLabelOfferId = $shippingLabelOfferId;
        return $this;
    }

    public function getShippingLabelOfferId(): string
    {
        return $this->shippingLabelOfferId;
    }
}
