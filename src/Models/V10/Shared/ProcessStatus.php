<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V10\Shared;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V10\Shared\ProcessStatus\Status;

/**
 * @method static ProcessStatus fromArray(array $data)
 */
final class ProcessStatus extends Model
{
    /** The process status id. */
    protected ?string $processStatusId = '';

    /**
     * The id of the object being processed. For example, in case of a
     * shipment process id, you will receive the id of the order item being
     * processed.
     */
    protected ?string $entityId = '';

    /** Name of the requested action that is being processed. */
    protected string $eventType = '';

    /** Describes the action that is being processed. */
    protected string $description = '';

    /** Status of the action being processed. */
    protected Status $status;

    /** Shows error message if applicable. */
    protected ?string $errorMessage = '';

    /** Time of creation of the response. */
    protected string $createTimestamp = '';

    /**
     * Lists available actions applicable to this endpoint.
     * @var Link[]
     */
    protected array $links = [];

    public function setProcessStatusId(?string $processStatusId): self
    {
        $this->processStatusId = $processStatusId;
        return $this;
    }

    public function getProcessStatusId(): ?string
    {
        return $this->processStatusId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
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

    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setCreateTimestamp(string $createTimestamp): self
    {
        $this->createTimestamp = $createTimestamp;
        return $this;
    }

    public function getCreateTimestamp(): string
    {
        return $this->createTimestamp;
    }

    public function setLinks(Link ...$links): self
    {
        $this->links = $links;
        return $this;
    }

    public function getLinks(): array
    {
        return $this->links;
    }
}
