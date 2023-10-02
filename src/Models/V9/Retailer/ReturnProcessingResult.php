<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReturnProcessingResult fromArray(array $data)
 */
final class ReturnProcessingResult extends Model
{
    /** The processed quantity. */
    protected int $quantity = 0;

    /** The processing result of the return. */
    protected ?string $processingResult = '';

    /** The handling result requested by the retailer. */
    protected string $handlingResult = '';

    /** The date and time in ISO 8601 format when the return was processed. */
    protected string $processingDateTime = '';

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setProcessingResult(?string $processingResult): self
    {
        $this->processingResult = $processingResult;
        return $this;
    }

    public function getProcessingResult(): ?string
    {
        return $this->processingResult;
    }

    public function setHandlingResult(string $handlingResult): self
    {
        $this->handlingResult = $handlingResult;
        return $this;
    }

    public function getHandlingResult(): string
    {
        return $this->handlingResult;
    }

    public function setProcessingDateTime(string $processingDateTime): self
    {
        $this->processingDateTime = $processingDateTime;
        return $this;
    }

    public function getProcessingDateTime(): string
    {
        return $this->processingDateTime;
    }
}