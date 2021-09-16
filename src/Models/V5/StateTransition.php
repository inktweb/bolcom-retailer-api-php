<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\StateTransition\State;

/**
 * @method static StateTransition fromArray(array $data)
 */
final class StateTransition extends Model
{
    /**
     * Indicates the state of this replenishment order.
     * @var State
     */
    protected $state;

    /**
     * The date and time in ISO 8601 format that indicates when this states
     * was updated for this replenishment.
     * @var string
     */
    protected $stateDateTime = '';

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
