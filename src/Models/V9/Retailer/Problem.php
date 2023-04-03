<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * Describes a problem that occurred interacting with the API.
 * @method static Problem fromArray(array $data)
 */
final class Problem extends Model
{
    /** Type URI for this problem. Fixed value: https://api.bol.com/problems. */
    protected ?string $type = '';

    /** Title describing the nature of the problem. */
    protected ?string $title = '';

    /** HTTP status returned from the endpoint causing the problem. */
    protected ?int $status = 0;

    /**
     * Detailed error message describing in additional detail what caused the
     * service to return this problem.
     */
    protected ?string $detail = '';

    /**
     * Host identifier describing the server instance that reported the
     * problem.
     */
    protected ?string $host = '';

    /** Full URI path of the resource that reported the problem. */
    protected ?string $instance = '';

    /** @var Violation[] */
    protected array $violations = [];

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;
        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;
        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setInstance(?string $instance): self
    {
        $this->instance = $instance;
        return $this;
    }

    public function getInstance(): ?string
    {
        return $this->instance;
    }

    public function setViolations(Violation ...$violations): self
    {
        $this->violations = $violations;
        return $this;
    }

    public function getViolations(): array
    {
        return $this->violations;
    }
}
