<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\Fulfilment\DeliveryCode;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\Fulfilment\Method;

/**
 * @method static Fulfilment fromArray(array $data)
 */
final class Fulfilment extends Model
{
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by
     * bol.com (FBB).
     */
    protected Method $method;

    /**
     * The delivery promise that applies to this offer. This value will only
     * be used in combination with fulfilmentMethod 'FBR'.
     */
    protected DeliveryCode $deliveryCode;

    public function setMethod(Method $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod(): Method
    {
        return $this->method;
    }

    public function setDeliveryCode(?DeliveryCode $deliveryCode): self
    {
        $this->deliveryCode = $deliveryCode;
        return $this;
    }

    public function getDeliveryCode(): ?DeliveryCode
    {
        return $this->deliveryCode;
    }
}
