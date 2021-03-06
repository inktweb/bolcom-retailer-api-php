<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\CreateProductContentRequest\Language;

/**
 * @method static CreateProductContentRequest fromArray(array $data)
 */
final class CreateProductContentRequest extends Model
{
    /**
     * The language to indicate the language of the supplied content. If you
     * are selling to the Wallonian region, you should use `fr-BE`.
     * @var Language
     */
    protected $language;

    /**
     * A list of supplied products and their attributes. Attributes that are
     * required for publishing products online will be mentioned in the data
     * model.
     * @var ProductContent[]
     */
    protected $productContents = [];

    public function setLanguage(Language $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function setProductContents(ProductContent ...$productContents): self
    {
        $this->productContents = $productContents;
        return $this;
    }

    public function getProductContents(): array
    {
        return $this->productContents;
    }
}
