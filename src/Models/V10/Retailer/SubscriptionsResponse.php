<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static SubscriptionsResponse fromArray(array $data)
 */
final class SubscriptionsResponse extends Model
{
    /** @var SubscriptionResponse[] */
    protected array $subscriptions = [];

    public function setSubscriptions(SubscriptionResponse ...$subscriptions): self
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }

    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }
}
