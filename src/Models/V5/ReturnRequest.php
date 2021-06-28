<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReturnRequest fromArray(array $data)
 */
final class ReturnRequest extends Model
{
    /** @var string */
    protected $handlingResult;

    /** @var int */
    protected $quantityReturned;

    public function setHandlingResult(?string $handlingResult): self
    {
        $this->handlingResult = $handlingResult;
        return $this;
    }

    public function getHandlingResult(): ?string
    {
        return $this->handlingResult;
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
}