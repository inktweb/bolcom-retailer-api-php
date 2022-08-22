<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Models\V6\DeliveryOption;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class LabelType extends Enum
{
    protected const MAX_ITEMS = 1;
    public const PARCEL = 'PARCEL';
    public const MAILBOX = 'MAILBOX';
    public const MAILBOX_LIGHT = 'MAILBOX_LIGHT';

    protected $allowedValues = ['PARCEL', 'MAILBOX', 'MAILBOX_LIGHT'];

    public static function parcel(): self
    {
        return (new static())->set(static::PARCEL);
    }

    public function isParcel(): bool
    {
        return $this->is(static::PARCEL);
    }

    public static function mailbox(): self
    {
        return (new static())->set(static::MAILBOX);
    }

    public function isMailbox(): bool
    {
        return $this->is(static::MAILBOX);
    }

    public static function mailboxLight(): self
    {
        return (new static())->set(static::MAILBOX_LIGHT);
    }

    public function isMailboxLight(): bool
    {
        return $this->is(static::MAILBOX_LIGHT);
    }
}
