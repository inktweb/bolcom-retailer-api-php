<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static KeySetResponse fromArray(array $data)
 */
final class KeySetResponse extends Model
{
    /** @var KeySet[] */
    protected $signatureKeys = [];

    public function setSignatureKeys(KeySet ...$signatureKeys): self
    {
        $this->signatureKeys = $signatureKeys;
        return $this;
    }

    public function getSignatureKeys(): array
    {
        return $this->signatureKeys;
    }
}
