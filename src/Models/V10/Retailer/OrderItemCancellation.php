<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\OrderItemCancellation\ReasonCode;

/**
 * List of order items to cancel. Order item id's must belong to the same
 * order.
 * @method static OrderItemCancellation fromArray(array $data)
 */
final class OrderItemCancellation extends Model
{
    /**
     * The id for the order item. One order can have multiple order items,
     * but the list can only take one item.
     */
    protected string $orderItemId = '';

    /** The code representing the reason for cancellation of this item. */
    protected ReasonCode $reasonCode;

    public function setOrderItemId(string $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    public function setReasonCode(ReasonCode $reasonCode): self
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    public function getReasonCode(): ReasonCode
    {
        return $this->reasonCode;
    }
}
