<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static NotPublishableReason fromArray(array $data)
 */
final class NotPublishableReason extends Model
{
    /**
     * Error code signalling that the offer is invalid.
     * @var string
     */
    protected $code = '';

    /**
     * Error message describing the reason the offer is invalid.
     * @var string
     */
    protected $description = '';

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
