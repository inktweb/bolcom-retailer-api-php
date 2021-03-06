<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * An order.
 * @method static ReducedOrder fromArray(array $data)
 */
final class ReducedOrder extends Model
{
    /**
     * The order id.
     * @var string
     */
    protected $orderId = '';

    /**
     * The date and time in ISO 8601 format when the order was placed.
     * @var string
     */
    protected $orderPlacedDateTime = '';

    /** @var ReducedOrderItem[] */
    protected $orderItems = [];

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderPlacedDateTime(?string $orderPlacedDateTime): self
    {
        $this->orderPlacedDateTime = $orderPlacedDateTime;
        return $this;
    }

    public function getOrderPlacedDateTime(): ?string
    {
        return $this->orderPlacedDateTime;
    }

    public function setOrderItems(ReducedOrderItem ...$orderItems): self
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
}
