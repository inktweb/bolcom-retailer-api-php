<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\HandoverDetails\CollectionMethod;

/**
 * @method static HandoverDetails fromArray(array $data)
 */
final class HandoverDetails extends Model
{
    /**
     * Indicates if you can use this label without receiving a strike if you
     * handover before the latestHandoverDateTime. If this field is 'false'
     * you can still buy and use this label but it will have negative
     * consequences on your performance score because the order will be
     * delivered too early or too late.
     * @var bool
     */
    protected $meetsCustomerExpectation = false;

    /**
     * The date and time at which the parcel must ultimately be at the
     * transporter to make sure your parcel is delivered on time. If you
     * handover after this date you will receive a strike because you order
     * will be delivered too late.
     * @var string
     */
    protected $latestHandoverDateTime = '';

    /**
     * The type of collection for this parcel.
     * @var CollectionMethod
     */
    protected $collectionMethod;

    public function setMeetsCustomerExpectation(?bool $meetsCustomerExpectation): self
    {
        $this->meetsCustomerExpectation = $meetsCustomerExpectation;
        return $this;
    }

    public function getMeetsCustomerExpectation(): ?bool
    {
        return $this->meetsCustomerExpectation;
    }

    public function setLatestHandoverDateTime(?string $latestHandoverDateTime): self
    {
        $this->latestHandoverDateTime = $latestHandoverDateTime;
        return $this;
    }

    public function getLatestHandoverDateTime(): ?string
    {
        return $this->latestHandoverDateTime;
    }

    public function setCollectionMethod(?CollectionMethod $collectionMethod): self
    {
        $this->collectionMethod = $collectionMethod;
        return $this;
    }

    public function getCollectionMethod(): ?CollectionMethod
    {
        return $this->collectionMethod;
    }
}
