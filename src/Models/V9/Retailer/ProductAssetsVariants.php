<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V9\Retailer;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\ProductAssetsVariants\MimeType;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\ProductAssetsVariants\Size;

/**
 * @method static ProductAssetsVariants fromArray(array $data)
 */
final class ProductAssetsVariants extends Model
{
    /** The name of the size of the asset, if the asset is an image. */
    protected ?Size $size = null;

    /** The width of the asset in pixels. */
    protected ?int $width = 0;

    /** The height of the asset in pixels. */
    protected ?int $height = 0;

    /** The mime type of the asset. */
    protected ?MimeType $mimeType = null;

    /** The URL of the attribute. */
    protected ?string $url = '';

    public function setSize(?Size $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getSize(): ?Size
    {
        return $this->size;
    }

    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setMimeType(?MimeType $mimeType): self
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getMimeType(): ?MimeType
    {
        return $this->mimeType;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }
}