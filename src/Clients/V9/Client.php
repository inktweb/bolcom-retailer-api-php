<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Clients
 */

namespace Inktweb\Bolcom\RetailerApi\Clients\V9;

use Inktweb\Bolcom\RetailerApi\Apis\V9\Advertiser;
use Inktweb\Bolcom\RetailerApi\Apis\V9\Retailer;
use Inktweb\Bolcom\RetailerApi\Apis\V9\Shared;
use Inktweb\Bolcom\RetailerApi\Contracts\Client as ClientContract;

final class Client extends ClientContract
{
    protected const DEFAULT_CONTENT_TYPE = 'application/vnd.retailer.v9+json';

    protected Advertiser $advertiser;
    protected Retailer $retailer;
    protected Shared $shared;

    public function advertiser(): Advertiser
    {
        return $this->advertiser
            ?? $this->advertiser = new Advertiser($this);
    }

    public function retailer(): Retailer
    {
        return $this->retailer
            ?? $this->retailer = new Retailer($this);
    }

    public function shared(): Shared
    {
        return $this->shared
            ?? $this->shared = new Shared($this);
    }
}
