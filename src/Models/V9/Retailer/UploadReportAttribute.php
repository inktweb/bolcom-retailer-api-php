<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\UploadReportAttribute\Status;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\UploadReportAttribute\SubStatus;

/**
 * @method static UploadReportAttribute fromArray(array $data)
 */
final class UploadReportAttribute extends Model
{
    /** The identifier of the attribute for which the value has changed. */
    protected string $id = '';

    /** @var UploadReportValue[] */
    protected array $values = [];

    /** The processing state of the submitted attribute. */
    protected Status $status;

    /** The reason code explaining why the value was rejected. */
    protected ?SubStatus $subStatus = null;

    /** The reason explaining why the value was rejected. */
    protected ?string $subStatusDescription = '';

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setValues(UploadReportValue ...$values): self
    {
        $this->values = $values;
        return $this;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setSubStatus(?SubStatus $subStatus): self
    {
        $this->subStatus = $subStatus;
        return $this;
    }

    public function getSubStatus(): ?SubStatus
    {
        return $this->subStatus;
    }

    public function setSubStatusDescription(?string $subStatusDescription): self
    {
        $this->subStatusDescription = $subStatusDescription;
        return $this;
    }

    public function getSubStatusDescription(): ?string
    {
        return $this->subStatusDescription;
    }
}
