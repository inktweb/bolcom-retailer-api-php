<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReturnItem fromArray(array $data)
 */
final class ReturnItem extends Model
{
    /**
     * The RMA (Return Merchandise Authorization) identifier of the return.
     * @var string
     */
    protected $rmaId = '';

    /**
     * The id of the customer order this return item is in.
     * @var string
     */
    protected $orderId = '';

    /**
     * The EAN number associated with this product.
     * @var string
     */
    protected $ean = '';

    /**
     * The product title.
     * @var string
     */
    protected $title = '';

    /**
     * The quantity that is expected to be returned by the customer. Note:
     * this can be greater than 1 in case the customer ordered a quantity
     * greater than 1 of the same product in the same customer order.
     * @var int
     */
    protected $expectedQuantity = 0;

    /** @var ReturnReason */
    protected $returnReason;

    /**
     * The track and trace code that is associated with this transport.
     * @var string
     */
    protected $trackAndTrace = '';

    /**
     * The name of the transporter.
     * @var string
     */
    protected $transporterName = '';

    /**
     * Indicates if this return item has been handled (by the retailer).
     * @var bool
     */
    protected $handled = false;

    /** @var ReturnProcessingResult[] */
    protected $processingResults = [];

    /** @var CustomerDetails */
    protected $customerDetails;

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

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
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

    public function setTrackAndTrace(?string $trackAndTrace): self
    {
        $this->trackAndTrace = $trackAndTrace;
        return $this;
    }

    public function getTrackAndTrace(): ?string
    {
        return $this->trackAndTrace;
    }

    public function setTransporterName(?string $transporterName): self
    {
        $this->transporterName = $transporterName;
        return $this;
    }

    public function getTransporterName(): ?string
    {
        return $this->transporterName;
    }

    public function setHandled(bool $handled): self
    {
        $this->handled = $handled;
        return $this;
    }

    public function getHandled(): bool
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

    public function setCustomerDetails(CustomerDetails $customerDetails): self
    {
        $this->customerDetails = $customerDetails;
        return $this;
    }

    public function getCustomerDetails(): CustomerDetails
    {
        return $this->customerDetails;
    }
}
