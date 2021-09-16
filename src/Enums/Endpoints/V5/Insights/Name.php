<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V5\Insights;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class Name extends Enum
{
    protected const MIN_ITEMS = 1;
    public const CANCELLATIONS = 'CANCELLATIONS';
    public const FULFILMENT = 'FULFILMENT';
    public const PHONE_AVAILABILITY = 'PHONE_AVAILABILITY';
    public const RESPONSE_TIME = 'RESPONSE_TIME';
    public const CASE_ITEM_RATIO = 'CASE_ITEM_RATIO';
    public const TRACK_AND_TRACE = 'TRACK_AND_TRACE';
    public const RETURNS = 'RETURNS';
    public const REVIEWS = 'REVIEWS';

    protected $allowedValues = [
        'CANCELLATIONS',
        'FULFILMENT',
        'PHONE_AVAILABILITY',
        'RESPONSE_TIME',
        'CASE_ITEM_RATIO',
        'TRACK_AND_TRACE',
        'RETURNS',
        'REVIEWS',
    ];

    public static function cancellations(): self
    {
        return (new static())->set(static::CANCELLATIONS);
    }

    public static function fulfilment(): self
    {
        return (new static())->set(static::FULFILMENT);
    }

    public static function phoneAvailability(): self
    {
        return (new static())->set(static::PHONE_AVAILABILITY);
    }

    public static function responseTime(): self
    {
        return (new static())->set(static::RESPONSE_TIME);
    }

    public static function caseItemRatio(): self
    {
        return (new static())->set(static::CASE_ITEM_RATIO);
    }

    public static function trackAndTrace(): self
    {
        return (new static())->set(static::TRACK_AND_TRACE);
    }

    public static function returns(): self
    {
        return (new static())->set(static::RETURNS);
    }

    public static function reviews(): self
    {
        return (new static())->set(static::REVIEWS);
    }
}