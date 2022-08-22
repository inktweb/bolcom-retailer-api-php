<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;

/**
 * The score for this measurement. In case there are no scores for an
 * indicator, this element is omitted from the response.
 * @method static Score fromArray(array $data)
 */
final class Score extends Model
{
    /**
     * Indicates whether the score conforms to the bol.com service norm or
     * not.
     * @var bool
     */
    protected $conforms = false;

    /**
     * The top part of the fraction (above the line). This usually is the
     * smaller number compared to the denominator.
     * @var int
     */
    protected $numerator = 0;

    /**
     * The lower part of the fraction (below the line). This usually is the
     * larger number compared to the the numerator.
     * @var int
     */
    protected $denominator = 0;

    /**
     * The score for this measurement (denominator divided by the numerator).
     * @var float
     */
    protected $value = 0;

    /**
     * The difference between the score and the bol.com service norm.
     * @var float
     */
    protected $distanceToNorm = 0;

    public function setConforms(bool $conforms): self
    {
        $this->conforms = $conforms;
        return $this;
    }

    public function getConforms(): bool
    {
        return $this->conforms;
    }

    public function setNumerator(int $numerator): self
    {
        $this->numerator = $numerator;
        return $this;
    }

    public function getNumerator(): int
    {
        return $this->numerator;
    }

    public function setDenominator(int $denominator): self
    {
        $this->denominator = $denominator;
        return $this;
    }

    public function getDenominator(): int
    {
        return $this->denominator;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setDistanceToNorm(float $distanceToNorm): self
    {
        $this->distanceToNorm = $distanceToNorm;
        return $this;
    }

    public function getDistanceToNorm(): float
    {
        return $this->distanceToNorm;
    }
}
