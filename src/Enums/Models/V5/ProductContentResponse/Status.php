<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V5\ProductContentResponse;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Status extends Enum
{
    protected const MAX_ITEMS = 1;
    public const VALIDATED_OK = 'VALIDATED_OK';
    public const VALIDATED_WITH_ATTRIBUTE_FAILURES = 'VALIDATED_WITH_ATTRIBUTE_FAILURES';
    public const REJECTED = 'REJECTED';
    public const REJECTED_WITH_ATTRIBUTE_FAILURES = 'REJECTED_WITH_ATTRIBUTE_FAILURES';

    protected $allowedValues = [
        'VALIDATED_OK',
        'VALIDATED_WITH_ATTRIBUTE_FAILURES',
        'REJECTED',
        'REJECTED_WITH_ATTRIBUTE_FAILURES',
    ];

    public static function validatedOk(): self
    {
        return (new static())->set(static::VALIDATED_OK);
    }

    public function isValidatedOk(): bool
    {
        return $this->is(static::VALIDATED_OK);
    }

    public static function validatedWithAttributeFailures(): self
    {
        return (new static())->set(static::VALIDATED_WITH_ATTRIBUTE_FAILURES);
    }

    public function isValidatedWithAttributeFailures(): bool
    {
        return $this->is(static::VALIDATED_WITH_ATTRIBUTE_FAILURES);
    }

    public static function rejected(): self
    {
        return (new static())->set(static::REJECTED);
    }

    public function isRejected(): bool
    {
        return $this->is(static::REJECTED);
    }

    public static function rejectedWithAttributeFailures(): self
    {
        return (new static())->set(static::REJECTED_WITH_ATTRIBUTE_FAILURES);
    }

    public function isRejectedWithAttributeFailures(): bool
    {
        return $this->is(static::REJECTED_WITH_ATTRIBUTE_FAILURES);
    }
}
