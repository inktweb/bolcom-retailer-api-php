<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The reason why the customer returned this product.
 * @method static ReturnReason fromArray(array $data)
 */
final class ReturnReason extends Model
{
    /**
     * The main reason describing why the customer returned this product.
     * @var string
     */
    protected $mainReason = '';

    /**
     * The sub reason describing why the customer returned this product in
     * more detail.
     * @var string
     */
    protected $detailedReason = '';

    /**
     * Additional details from the customer as to why this item was returned.
     * @var string
     */
    protected $customerComments = '';

    public function setMainReason(?string $mainReason): self
    {
        $this->mainReason = $mainReason;
        return $this;
    }

    public function getMainReason(): ?string
    {
        return $this->mainReason;
    }

    public function setDetailedReason(?string $detailedReason): self
    {
        $this->detailedReason = $detailedReason;
        return $this;
    }

    public function getDetailedReason(): ?string
    {
        return $this->detailedReason;
    }

    public function setCustomerComments(?string $customerComments): self
    {
        $this->customerComments = $customerComments;
        return $this;
    }

    public function getCustomerComments(): ?string
    {
        return $this->customerComments;
    }
}
