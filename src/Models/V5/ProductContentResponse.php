<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\ProductContentResponse\Status;

/**
 * An rejected product content.
 * @method static ProductContentResponse fromArray(array $data)
 */
final class ProductContentResponse extends Model
{
    /**
     * A user defined unique reference to identify the products in the
     * upload.
     * @var string
     */
    protected $internalReference = '';

    /** @var RejectedAttributeResponse[] */
    protected $rejectedAttributes = [];

    /**
     * The end status of the rejected attribute.
     * @var Status
     */
    protected $status;

    /**
     * The rejection error code.
     * @var int
     */
    protected $errorCode = 0;

    /**
     * The rejection error message explains why the value was rejected.
     * @var string
     */
    protected $errorDescription = '';

    public function setInternalReference(string $internalReference): self
    {
        $this->internalReference = $internalReference;
        return $this;
    }

    public function getInternalReference(): string
    {
        return $this->internalReference;
    }

    public function setRejectedAttributes(?RejectedAttributeResponse ...$rejectedAttributes): self
    {
        $this->rejectedAttributes = $rejectedAttributes;
        return $this;
    }

    public function getRejectedAttributes(): ?array
    {
        return $this->rejectedAttributes;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function setErrorDescription(?string $errorDescription): self
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }

    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
}
