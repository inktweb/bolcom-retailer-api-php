<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedReturnItem fromArray(array $data)
 */
final class ReducedReturnItem extends Model
{
    /** The RMA (Return Merchandise Authorization) identifier of the return. */
    protected string $rmaId = '';

    /** The id of the customer order this return item is in. */
    protected string $orderId = '';

    /** The EAN number associated with this product. */
    protected string $ean = '';

    /**
     * The quantity that is expected to be returned by the customer. Note:
     * this can be greater than 1 in case the customer ordered a quantity
     * greater than 1 of the same product in the same customer order.
     */
    protected int $expectedQuantity = 0;
    protected ?ReturnReason $returnReason = null;

    /** Indicates if this return item has been handled (by the retailer). */
    protected ?bool $handled = false;

    /** @var ReturnProcessingResult[] */
    protected array $processingResults = [];

    public function setRmaId(string $rmaId): self
    {
        $this->rmaId = $rmaId;
        return $this;
    }

    public function getRmaId(): string
    {
        return $this->rmaId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setEan(string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setExpectedQuantity(int $expectedQuantity): self
    {
        $this->expectedQuantity = $expectedQuantity;
        return $this;
    }

    public function getExpectedQuantity(): int
    {
        return $this->expectedQuantity;
    }

    public function setReturnReason(?ReturnReason $returnReason): self
    {
        $this->returnReason = $returnReason;
        return $this;
    }

    public function getReturnReason(): ?ReturnReason
    {
        return $this->returnReason;
    }

    public function setHandled(?bool $handled): self
    {
        $this->handled = $handled;
        return $this;
    }

    public function getHandled(): ?bool
    {
        return $this->handled;
    }

    public function setProcessingResults(ReturnProcessingResult ...$processingResults): self
    {
        $this->processingResults = $processingResults;
        return $this;
    }

    public function getProcessingResults(): array
    {
        return $this->processingResults;
    }
}