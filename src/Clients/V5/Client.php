<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Clients
 */

namespace Inktweb\Bolcom\RetailerApi\Clients\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Client as ClientContract;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Commissions;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Insights;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Inventory;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Invoices;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Offers;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Orders;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\ProductContent;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Replenishments;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Returns;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Shipments;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\ShippingLabels;
use Inktweb\Bolcom\RetailerApi\Endpoints\V5\Transports;

final class Client extends ClientContract
{
    protected const DEFAULT_CONTENT_TYPE = 'application/vnd.retailer.v5+json';

    /** @var Commissions */
    protected $commissions;

    /** @var ProductContent */
    protected $productContent;

    /** @var Insights */
    protected $insights;

    /** @var Inventory */
    protected $inventory;

    /** @var Invoices */
    protected $invoices;

    /** @var Offers */
    protected $offers;

    /** @var Orders */
    protected $orders;

    /** @var ProcessStatus */
    protected $processStatus;

    /** @var Replenishments */
    protected $replenishments;

    /** @var Returns */
    protected $returns;

    /** @var Shipments */
    protected $shipments;

    /** @var ShippingLabels */
    protected $shippingLabels;

    /** @var Transports */
    protected $transports;

    public function commissions(): Commissions
    {
        return $this->commissions ?? $this->commissions = new Commissions($this);
    }

    public function productContent(): ProductContent
    {
        return $this->productContent ?? $this->productContent = new ProductContent($this);
    }

    public function insights(): Insights
    {
        return $this->insights ?? $this->insights = new Insights($this);
    }

    public function inventory(): Inventory
    {
        return $this->inventory ?? $this->inventory = new Inventory($this);
    }

    public function invoices(): Invoices
    {
        return $this->invoices ?? $this->invoices = new Invoices($this);
    }

    public function offers(): Offers
    {
        return $this->offers ?? $this->offers = new Offers($this);
    }

    public function orders(): Orders
    {
        return $this->orders ?? $this->orders = new Orders($this);
    }

    public function processStatus(): ProcessStatus
    {
        return $this->processStatus ?? $this->processStatus = new ProcessStatus($this);
    }

    public function replenishments(): Replenishments
    {
        return $this->replenishments ?? $this->replenishments = new Replenishments($this);
    }

    public function returns(): Returns
    {
        return $this->returns ?? $this->returns = new Returns($this);
    }

    public function shipments(): Shipments
    {
        return $this->shipments ?? $this->shipments = new Shipments($this);
    }

    public function shippingLabels(): ShippingLabels
    {
        return $this->shippingLabels ?? $this->shippingLabels = new ShippingLabels($this);
    }

    public function transports(): Transports
    {
        return $this->transports ?? $this->transports = new Transports($this);
    }
}
