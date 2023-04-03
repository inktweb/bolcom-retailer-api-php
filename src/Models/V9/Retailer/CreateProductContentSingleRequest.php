<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\CreateProductContentSingleRequest\Language;

/**
 * @method static CreateProductContentSingleRequest fromArray(array $data)
 */
final class CreateProductContentSingleRequest extends Model
{
    /** The language in which content is submitted. */
    protected Language $language;

    /**
     * A list of attributes.
     * @var Attribute[]
     */
    protected array $attributes = [];

    /** @var Asset[] */
    protected ?array $assets = [];

    public function setLanguage(Language $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function setAttributes(Attribute ...$attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAssets(?Asset ...$assets): self
    {
        $this->assets = $assets;
        return $this;
    }

    public function getAssets(): ?array
    {
        return $this->assets;
    }
}
