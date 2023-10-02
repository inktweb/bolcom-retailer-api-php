<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\SubscriptionRequest\Resources;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Retailer\SubscriptionRequest\SubscriptionType;

/**
 * @method static SubscriptionRequest fromArray(array $data)
 */
final class SubscriptionRequest extends Model
{
    /**
     * Array of event types for which the subscription is set. Note that some
     * event types are only available for certain subscription types.
     */
    protected array $resources = [];

    /**
     * The destination for event notifications. For WEBHOOK subscription
     * types, this is the URL where messages are posted to. For GCP_PUBSUB,
     * this is the topic name.
     */
    protected string $url = '';

    /**
     * The type of subscription. It indicates the platform where the events
     * will be subscribed to. Be aware that certain event types are only
     * available for specific types.
     */
    protected SubscriptionType $subscriptionType;

    public function setResources(Resources ...$resources): self
    {
        $this->resources = $resources;
        return $this;
    }

    public function getResources(): array
    {
        return $this->resources;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setSubscriptionType(SubscriptionType $subscriptionType): self
    {
        $this->subscriptionType = $subscriptionType;
        return $this;
    }

    public function getSubscriptionType(): SubscriptionType
    {
        return $this->subscriptionType;
    }
}
