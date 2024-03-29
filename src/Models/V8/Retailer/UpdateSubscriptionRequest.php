<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static UpdateSubscriptionRequest fromArray(array $data)
 */
final class UpdateSubscriptionRequest extends Model
{
    /** Type of event. */
    protected array $resources = [];

    /** URL to receive this WebHook notification. */
    protected string $url = '';

    public function setResources(array $resources): self
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
}
