<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * A rejected attribute.
 * @method static RejectedAttributeResponse fromArray(array $data)
 */
final class RejectedAttributeResponse extends Model
{
    /**
     * Identifier of the attribute from the data model.
     * @var string
     */
    protected $attributeId = '';

    /** @var RejectionError[] */
    protected $rejectionErrors = [];

    public function setAttributeId(string $attributeId): self
    {
        $this->attributeId = $attributeId;
        return $this;
    }

    public function getAttributeId(): string
    {
        return $this->attributeId;
    }

    public function setRejectionErrors(RejectionError ...$rejectionErrors): self
    {
        $this->rejectionErrors = $rejectionErrors;
        return $this;
    }

    public function getRejectionErrors(): array
    {
        return $this->rejectionErrors;
    }
}
