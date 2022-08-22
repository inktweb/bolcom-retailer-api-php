<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\InvalidReplenishmentLine\Type;

/**
 * @method static InvalidReplenishmentLine fromArray(array $data)
 */
final class InvalidReplenishmentLine extends Model
{
    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot
     * be determined for this replenishment line.
     * @var Type
     */
    protected $type;

    /**
     * The amount of announced quantity for this replenishment line.
     * @var int
     */
    protected $quantityAnnounced = 0;

    /**
     * The amount of received quantity for this replenishment line.
     * @var int
     */
    protected $quantityReceived = 0;

    /**
     * The amount of quantity that is still in progress at the warehouse for
     * this replenishment line.
     * @var int
     */
    protected $quantityInProgress = 0;

    /**
     * The quantity within this shipment line that has a graded (unsalable)
     * state.
     * @var int
     */
    protected $quantityWithGradedState = 0;

    /**
     * The quantity within this shipment line that has a regular (salable)
     * state.
     * @var int
     */
    protected $quantityWithRegularState = 0;

    public function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setQuantityAnnounced(int $quantityAnnounced): self
    {
        $this->quantityAnnounced = $quantityAnnounced;
        return $this;
    }

    public function getQuantityAnnounced(): int
    {
        return $this->quantityAnnounced;
    }

    public function setQuantityReceived(int $quantityReceived): self
    {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    public function getQuantityReceived(): int
    {
        return $this->quantityReceived;
    }

    public function setQuantityInProgress(int $quantityInProgress): self
    {
        $this->quantityInProgress = $quantityInProgress;
        return $this;
    }

    public function getQuantityInProgress(): int
    {
        return $this->quantityInProgress;
    }

    public function setQuantityWithGradedState(int $quantityWithGradedState): self
    {
        $this->quantityWithGradedState = $quantityWithGradedState;
        return $this;
    }

    public function getQuantityWithGradedState(): int
    {
        return $this->quantityWithGradedState;
    }

    public function setQuantityWithRegularState(int $quantityWithRegularState): self
    {
        $this->quantityWithRegularState = $quantityWithRegularState;
        return $this;
    }

    public function getQuantityWithRegularState(): int
    {
        return $this->quantityWithRegularState;
    }
}
