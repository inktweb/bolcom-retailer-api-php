<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V8\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * @method static CatalogProduct fromArray(array $data)
 */
final class CatalogProduct extends Model
{
    /**
     * Indicates whether the product meets the minimum requirements for
     * publishing to the webshop.
     */
    protected bool $published = false;
    protected Gpc $gpc;
    protected ?Enrichment $enrichment = null;

    /** @var Attributes[] */
    protected array $attributes = [];

    /** @var Party[] */
    protected array $parties = [];

    /** @var AudioTracks[] */
    protected ?array $audioTracks = [];

    /** @var Serie[] */
    protected ?array $series = [];

    public function setPublished(bool $published): self
    {
        $this->published = $published;
        return $this;
    }

    public function getPublished(): bool
    {
        return $this->published;
    }

    public function setGpc(Gpc $gpc): self
    {
        $this->gpc = $gpc;
        return $this;
    }

    public function getGpc(): Gpc
    {
        return $this->gpc;
    }

    public function setEnrichment(?Enrichment $enrichment): self
    {
        $this->enrichment = $enrichment;
        return $this;
    }

    public function getEnrichment(): ?Enrichment
    {
        return $this->enrichment;
    }

    public function setAttributes(Attributes ...$attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setParties(Party ...$parties): self
    {
        $this->parties = $parties;
        return $this;
    }

    public function getParties(): array
    {
        return $this->parties;
    }

    public function setAudioTracks(?AudioTracks ...$audioTracks): self
    {
        $this->audioTracks = $audioTracks;
        return $this;
    }

    public function getAudioTracks(): ?array
    {
        return $this->audioTracks;
    }

    public function setSeries(?Serie ...$series): self
    {
        $this->series = $series;
        return $this;
    }

    public function getSeries(): ?array
    {
        return $this->series;
    }
}