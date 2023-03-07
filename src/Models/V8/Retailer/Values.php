<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Values fromArray(array $data)
 */
final class Values extends Model
{
    /** The value of the attribute. */
    protected string $value = '';

    /** The unit identifier of the attribute. */
    protected ?string $unitId = '';

    /** The identifier of the attribute's value. */
    protected ?string $valueId = '';

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setUnitId(?string $unitId): self
    {
        $this->unitId = $unitId;
        return $this;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setValueId(?string $valueId): self
    {
        $this->valueId = $valueId;
        return $this;
    }

    public function getValueId(): ?string
    {
        return $this->valueId;
    }
}
