<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static Attribute fromArray(array $data)
 */
final class Attribute extends Model
{
    /** The identifier of the attribute for which the value has changed. */
    protected string $id = '';

    /** @var AttributeValue[] */
    protected array $values = [];

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setValues(AttributeValue ...$values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getValues(): array
    {
        return $this->values;
    }
}
