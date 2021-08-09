<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\V5\ProcessStatus;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;

class EventType extends Enum
{
    protected const MIN_ITEMS = 1;
    public const CONFIRM_SHIPMENT = 'CONFIRM_SHIPMENT';
    public const CANCEL_ORDER = 'CANCEL_ORDER';
    public const CHANGE_TRANSPORT = 'CHANGE_TRANSPORT';
    public const HANDLE_RETURN_ITEM = 'HANDLE_RETURN_ITEM';
    public const CREATE_RETURN_ITEM = 'CREATE_RETURN_ITEM';
    public const CREATE_INBOUND = 'CREATE_INBOUND';
    public const DELETE_OFFER = 'DELETE_OFFER';
    public const CREATE_OFFER = 'CREATE_OFFER';
    public const UPDATE_OFFER = 'UPDATE_OFFER';
    public const UPDATE_OFFER_STOCK = 'UPDATE_OFFER_STOCK';
    public const UPDATE_OFFER_PRICE = 'UPDATE_OFFER_PRICE';
    public const CREATE_OFFER_EXPORT = 'CREATE_OFFER_EXPORT';
    public const UNPUBLISHED_OFFER_REPORT = 'UNPUBLISHED_OFFER_REPORT';
    public const CREATE_PRODUCT_CONTENT = 'CREATE_PRODUCT_CONTENT';
    public const CREATE_SUBSCRIPTION = 'CREATE_SUBSCRIPTION';
    public const UPDATE_SUBSCRIPTION = 'UPDATE_SUBSCRIPTION';
    public const DELETE_SUBSCRIPTION = 'DELETE_SUBSCRIPTION';
    public const SEND_SUBSCRIPTION_TST_MSG = 'SEND_SUBSCRIPTION_TST_MSG';
    public const CREATE_SHIPPING_LABEL = 'CREATE_SHIPPING_LABEL';

    protected $allowedValues = [
        'CONFIRM_SHIPMENT',
        'CANCEL_ORDER',
        'CHANGE_TRANSPORT',
        'HANDLE_RETURN_ITEM',
        'CREATE_RETURN_ITEM',
        'CREATE_INBOUND',
        'DELETE_OFFER',
        'CREATE_OFFER',
        'UPDATE_OFFER',
        'UPDATE_OFFER_STOCK',
        'UPDATE_OFFER_PRICE',
        'CREATE_OFFER_EXPORT',
        'UNPUBLISHED_OFFER_REPORT',
        'CREATE_PRODUCT_CONTENT',
        'CREATE_SUBSCRIPTION',
        'UPDATE_SUBSCRIPTION',
        'DELETE_SUBSCRIPTION',
        'SEND_SUBSCRIPTION_TST_MSG',
        'CREATE_SHIPPING_LABEL',
    ];

    public static function confirmShipment(): self
    {
        return (new static())->set(static::CONFIRM_SHIPMENT);
    }

    public static function cancelOrder(): self
    {
        return (new static())->set(static::CANCEL_ORDER);
    }

    public static function changeTransport(): self
    {
        return (new static())->set(static::CHANGE_TRANSPORT);
    }

    public static function handleReturnItem(): self
    {
        return (new static())->set(static::HANDLE_RETURN_ITEM);
    }

    public static function createReturnItem(): self
    {
        return (new static())->set(static::CREATE_RETURN_ITEM);
    }

    public static function createInbound(): self
    {
        return (new static())->set(static::CREATE_INBOUND);
    }

    public static function deleteOffer(): self
    {
        return (new static())->set(static::DELETE_OFFER);
    }

    public static function createOffer(): self
    {
        return (new static())->set(static::CREATE_OFFER);
    }

    public static function updateOffer(): self
    {
        return (new static())->set(static::UPDATE_OFFER);
    }

    public static function updateOfferStock(): self
    {
        return (new static())->set(static::UPDATE_OFFER_STOCK);
    }

    public static function updateOfferPrice(): self
    {
        return (new static())->set(static::UPDATE_OFFER_PRICE);
    }

    public static function createOfferExport(): self
    {
        return (new static())->set(static::CREATE_OFFER_EXPORT);
    }

    public static function unpublishedOfferReport(): self
    {
        return (new static())->set(static::UNPUBLISHED_OFFER_REPORT);
    }

    public static function createProductContent(): self
    {
        return (new static())->set(static::CREATE_PRODUCT_CONTENT);
    }

    public static function createSubscription(): self
    {
        return (new static())->set(static::CREATE_SUBSCRIPTION);
    }

    public static function updateSubscription(): self
    {
        return (new static())->set(static::UPDATE_SUBSCRIPTION);
    }

    public static function deleteSubscription(): self
    {
        return (new static())->set(static::DELETE_SUBSCRIPTION);
    }

    public static function sendSubscriptionTstMsg(): self
    {
        return (new static())->set(static::SEND_SUBSCRIPTION_TST_MSG);
    }

    public static function createShippingLabel(): self
    {
        return (new static())->set(static::CREATE_SHIPPING_LABEL);
    }
}
