<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static ReducedReturn fromArray(array $data)
 */
final class ReducedReturn extends Model
{
    /** Unique identifier for a return. */
    protected string $returnId = '';

    /** The date and time in ISO 8601 format when this return was registered. */
    protected string $registrationDateTime = '';

    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by
     * bol.com (FBB).
     */
    protected string $fulfilmentMethod = '';

    /** @var ReducedReturnItem[] */
    protected array $returnItems = [];

    public function setReturnId(string $returnId): self
    {
        $this->returnId = $returnId;
        return $this;
    }

    public function getReturnId(): string
    {
        return $this->returnId;
    }

    public function setRegistrationDateTime(string $registrationDateTime): self
    {
        $this->registrationDateTime = $registrationDateTime;
        return $this;
    }

    public function getRegistrationDateTime(): string
    {
        return $this->registrationDateTime;
    }

    public function setFulfilmentMethod(string $fulfilmentMethod): self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;
        return $this;
    }

    public function getFulfilmentMethod(): string
    {
        return $this->fulfilmentMethod;
    }

    public function setReturnItems(ReducedReturnItem ...$returnItems): self
    {
        $this->returnItems = $returnItems;
        return $this;
    }

    public function getReturnItems(): array
    {
        return $this->returnItems;
    }
}
