<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\CreateReturnRequest\HandlingResult;

/**
 * @method static CreateReturnRequest fromArray(array $data)
 */
final class CreateReturnRequest extends Model
{
    /**
     * The id for the order item. One order can have multiple order items,
     * but the list can only take one item.
     */
    protected string $orderItemId = '';

    /** The quantity of items returned. */
    protected int $quantityReturned = 0;

    /** The handling result requested by the retailer. */
    protected HandlingResult $handlingResult;

    public function setOrderItemId(string $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    public function setQuantityReturned(int $quantityReturned): self
    {
        $this->quantityReturned = $quantityReturned;
        return $this;
    }

    public function getQuantityReturned(): int
    {
        return $this->quantityReturned;
    }

    public function setHandlingResult(HandlingResult $handlingResult): self
    {
        $this->handlingResult = $handlingResult;
        return $this;
    }

    public function getHandlingResult(): HandlingResult
    {
        return $this->handlingResult;
    }
}
