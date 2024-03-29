<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static StockCreate fromArray(array $data)
 */
final class StockCreate extends Model
{
    /**
     * The amount of stock available for the specified product present in the
     * retailers warehouse. Note: this should not be the FBB stock! Defaults
     * to 0.
     */
    protected int $amount = 0;

    /**
     * Configures whether the retailer manages the stock levels or that
     * bol.com should calculate the corrected stock based on actual open
     * orders. In case the configuration is set to 'false', all open orders
     * are used to calculate the corrected stock. In case the configuration
     * is set to 'true', only orders that are placed after the last offer
     * update are taken into account.
     */
    protected bool $managedByRetailer = false;

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setManagedByRetailer(bool $managedByRetailer): self
    {
        $this->managedByRetailer = $managedByRetailer;
        return $this;
    }

    public function getManagedByRetailer(): bool
    {
        return $this->managedByRetailer;
    }
}
