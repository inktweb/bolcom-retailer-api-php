<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts\Enum;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

final class Constants extends Enum
{
    public static function collectionFormat(): string
    {
        return self::COLLECTION_FORMAT;
    }

    public static function minItems(): int
    {
        return self::MIN_ITEMS;
    }

    public static function maxItems(): ?int
    {
        return self::MAX_ITEMS;
    }

    public static function uniqueItems(): bool
    {
        return self::UNIQUE_ITEMS;
    }
}
