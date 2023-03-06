<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The possible delivery options based on a shippable configuration
 * @method static DeliveryOptionsResponse fromArray(array $data)
 */
final class DeliveryOptionsResponse extends Model
{
    /** @var DeliveryOption[] */
    protected array $deliveryOptions = [];

    public function setDeliveryOptions(DeliveryOption ...$deliveryOptions): self
    {
        $this->deliveryOptions = $deliveryOptions;
        return $this;
    }

    public function getDeliveryOptions(): array
    {
        return $this->deliveryOptions;
    }
}
