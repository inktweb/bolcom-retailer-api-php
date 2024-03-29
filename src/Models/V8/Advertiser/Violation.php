<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Describes a violation that occurred interacting with the API.
 * @method static Violation fromArray(array $data)
 */
final class Violation extends Model
{
    /**
     * Describes the origin of the error, for instance a field or query
     * parameter validation error.
     */
    protected ?string $name = '';

    /** Detailed description of the validation error that caused the problem. */
    protected ?string $reason = '';

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }
}
