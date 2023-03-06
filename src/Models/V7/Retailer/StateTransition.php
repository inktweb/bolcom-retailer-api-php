<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\StateTransition\State;

/**
 * @method static StateTransition fromArray(array $data)
 */
final class StateTransition extends Model
{
    /** Indicates the state of this replenishment order. */
    protected State $state;

    /**
     * The date and time in ISO 8601 format that indicates when this states
     * was updated for this replenishment.
     */
    protected string $stateDateTime = '';

    public function setState(State $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function setStateDateTime(string $stateDateTime): self
    {
        $this->stateDateTime = $stateDateTime;
        return $this;
    }

    public function getStateDateTime(): string
    {
        return $this->stateDateTime;
    }
}
