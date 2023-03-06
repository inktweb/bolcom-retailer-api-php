<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Enums\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Shared\ProcessStatus;

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
    public const CREATE_REPLENISHMENT = 'CREATE_REPLENISHMENT';
    public const UPDATE_REPLENISHMENT = 'UPDATE_REPLENISHMENT';
    public const CREATE_CAMPAIGN = 'CREATE_CAMPAIGN';
    public const UPDATE_CAMPAIGN = 'UPDATE_CAMPAIGN';
    public const CREATE_AD_GROUP = 'CREATE_AD_GROUP';
    public const UPDATE_AD_GROUP = 'UPDATE_AD_GROUP';
    public const CREATE_TARGET_PRODUCT = 'CREATE_TARGET_PRODUCT';
    public const UPDATE_TARGET_PRODUCT = 'UPDATE_TARGET_PRODUCT';
    public const CREATE_NEGATIVE_KEYWORD = 'CREATE_NEGATIVE_KEYWORD';
    public const DELETE_NEGATIVE_KEYWORD = 'DELETE_NEGATIVE_KEYWORD';
    public const CREATE_KEYWORD = 'CREATE_KEYWORD';
    public const UPDATE_KEYWORD = 'UPDATE_KEYWORD';
    public const DELETE_KEYWORD = 'DELETE_KEYWORD';
    public const REQUEST_PRODUCT_DESTINATIONS = 'REQUEST_PRODUCT_DESTINATIONS';

    protected array $allowedValues = [
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
        'CREATE_REPLENISHMENT',
        'UPDATE_REPLENISHMENT',
        'CREATE_CAMPAIGN',
        'UPDATE_CAMPAIGN',
        'CREATE_AD_GROUP',
        'UPDATE_AD_GROUP',
        'CREATE_TARGET_PRODUCT',
        'UPDATE_TARGET_PRODUCT',
        'CREATE_NEGATIVE_KEYWORD',
        'DELETE_NEGATIVE_KEYWORD',
        'CREATE_KEYWORD',
        'UPDATE_KEYWORD',
        'DELETE_KEYWORD',
        'REQUEST_PRODUCT_DESTINATIONS',
    ];

    public static function confirmShipment(): self
    {
        return (new static())->set(static::CONFIRM_SHIPMENT);
    }

    public function isConfirmShipment(): bool
    {
        return $this->is(static::CONFIRM_SHIPMENT);
    }

    public static function cancelOrder(): self
    {
        return (new static())->set(static::CANCEL_ORDER);
    }

    public function isCancelOrder(): bool
    {
        return $this->is(static::CANCEL_ORDER);
    }

    public static function changeTransport(): self
    {
        return (new static())->set(static::CHANGE_TRANSPORT);
    }

    public function isChangeTransport(): bool
    {
        return $this->is(static::CHANGE_TRANSPORT);
    }

    public static function handleReturnItem(): self
    {
        return (new static())->set(static::HANDLE_RETURN_ITEM);
    }

    public function isHandleReturnItem(): bool
    {
        return $this->is(static::HANDLE_RETURN_ITEM);
    }

    public static function createReturnItem(): self
    {
        return (new static())->set(static::CREATE_RETURN_ITEM);
    }

    public function isCreateReturnItem(): bool
    {
        return $this->is(static::CREATE_RETURN_ITEM);
    }

    public static function createInbound(): self
    {
        return (new static())->set(static::CREATE_INBOUND);
    }

    public function isCreateInbound(): bool
    {
        return $this->is(static::CREATE_INBOUND);
    }

    public static function deleteOffer(): self
    {
        return (new static())->set(static::DELETE_OFFER);
    }

    public function isDeleteOffer(): bool
    {
        return $this->is(static::DELETE_OFFER);
    }

    public static function createOffer(): self
    {
        return (new static())->set(static::CREATE_OFFER);
    }

    public function isCreateOffer(): bool
    {
        return $this->is(static::CREATE_OFFER);
    }

    public static function updateOffer(): self
    {
        return (new static())->set(static::UPDATE_OFFER);
    }

    public function isUpdateOffer(): bool
    {
        return $this->is(static::UPDATE_OFFER);
    }

    public static function updateOfferStock(): self
    {
        return (new static())->set(static::UPDATE_OFFER_STOCK);
    }

    public function isUpdateOfferStock(): bool
    {
        return $this->is(static::UPDATE_OFFER_STOCK);
    }

    public static function updateOfferPrice(): self
    {
        return (new static())->set(static::UPDATE_OFFER_PRICE);
    }

    public function isUpdateOfferPrice(): bool
    {
        return $this->is(static::UPDATE_OFFER_PRICE);
    }

    public static function createOfferExport(): self
    {
        return (new static())->set(static::CREATE_OFFER_EXPORT);
    }

    public function isCreateOfferExport(): bool
    {
        return $this->is(static::CREATE_OFFER_EXPORT);
    }

    public static function unpublishedOfferReport(): self
    {
        return (new static())->set(static::UNPUBLISHED_OFFER_REPORT);
    }

    public function isUnpublishedOfferReport(): bool
    {
        return $this->is(static::UNPUBLISHED_OFFER_REPORT);
    }

    public static function createProductContent(): self
    {
        return (new static())->set(static::CREATE_PRODUCT_CONTENT);
    }

    public function isCreateProductContent(): bool
    {
        return $this->is(static::CREATE_PRODUCT_CONTENT);
    }

    public static function createSubscription(): self
    {
        return (new static())->set(static::CREATE_SUBSCRIPTION);
    }

    public function isCreateSubscription(): bool
    {
        return $this->is(static::CREATE_SUBSCRIPTION);
    }

    public static function updateSubscription(): self
    {
        return (new static())->set(static::UPDATE_SUBSCRIPTION);
    }

    public function isUpdateSubscription(): bool
    {
        return $this->is(static::UPDATE_SUBSCRIPTION);
    }

    public static function deleteSubscription(): self
    {
        return (new static())->set(static::DELETE_SUBSCRIPTION);
    }

    public function isDeleteSubscription(): bool
    {
        return $this->is(static::DELETE_SUBSCRIPTION);
    }

    public static function sendSubscriptionTstMsg(): self
    {
        return (new static())->set(static::SEND_SUBSCRIPTION_TST_MSG);
    }

    public function isSendSubscriptionTstMsg(): bool
    {
        return $this->is(static::SEND_SUBSCRIPTION_TST_MSG);
    }

    public static function createShippingLabel(): self
    {
        return (new static())->set(static::CREATE_SHIPPING_LABEL);
    }

    public function isCreateShippingLabel(): bool
    {
        return $this->is(static::CREATE_SHIPPING_LABEL);
    }

    public static function createReplenishment(): self
    {
        return (new static())->set(static::CREATE_REPLENISHMENT);
    }

    public function isCreateReplenishment(): bool
    {
        return $this->is(static::CREATE_REPLENISHMENT);
    }

    public static function updateReplenishment(): self
    {
        return (new static())->set(static::UPDATE_REPLENISHMENT);
    }

    public function isUpdateReplenishment(): bool
    {
        return $this->is(static::UPDATE_REPLENISHMENT);
    }

    public static function createCampaign(): self
    {
        return (new static())->set(static::CREATE_CAMPAIGN);
    }

    public function isCreateCampaign(): bool
    {
        return $this->is(static::CREATE_CAMPAIGN);
    }

    public static function updateCampaign(): self
    {
        return (new static())->set(static::UPDATE_CAMPAIGN);
    }

    public function isUpdateCampaign(): bool
    {
        return $this->is(static::UPDATE_CAMPAIGN);
    }

    public static function createAdGroup(): self
    {
        return (new static())->set(static::CREATE_AD_GROUP);
    }

    public function isCreateAdGroup(): bool
    {
        return $this->is(static::CREATE_AD_GROUP);
    }

    public static function updateAdGroup(): self
    {
        return (new static())->set(static::UPDATE_AD_GROUP);
    }

    public function isUpdateAdGroup(): bool
    {
        return $this->is(static::UPDATE_AD_GROUP);
    }

    public static function createTargetProduct(): self
    {
        return (new static())->set(static::CREATE_TARGET_PRODUCT);
    }

    public function isCreateTargetProduct(): bool
    {
        return $this->is(static::CREATE_TARGET_PRODUCT);
    }

    public static function updateTargetProduct(): self
    {
        return (new static())->set(static::UPDATE_TARGET_PRODUCT);
    }

    public function isUpdateTargetProduct(): bool
    {
        return $this->is(static::UPDATE_TARGET_PRODUCT);
    }

    public static function createNegativeKeyword(): self
    {
        return (new static())->set(static::CREATE_NEGATIVE_KEYWORD);
    }

    public function isCreateNegativeKeyword(): bool
    {
        return $this->is(static::CREATE_NEGATIVE_KEYWORD);
    }

    public static function deleteNegativeKeyword(): self
    {
        return (new static())->set(static::DELETE_NEGATIVE_KEYWORD);
    }

    public function isDeleteNegativeKeyword(): bool
    {
        return $this->is(static::DELETE_NEGATIVE_KEYWORD);
    }

    public static function createKeyword(): self
    {
        return (new static())->set(static::CREATE_KEYWORD);
    }

    public function isCreateKeyword(): bool
    {
        return $this->is(static::CREATE_KEYWORD);
    }

    public static function updateKeyword(): self
    {
        return (new static())->set(static::UPDATE_KEYWORD);
    }

    public function isUpdateKeyword(): bool
    {
        return $this->is(static::UPDATE_KEYWORD);
    }

    public static function deleteKeyword(): self
    {
        return (new static())->set(static::DELETE_KEYWORD);
    }

    public function isDeleteKeyword(): bool
    {
        return $this->is(static::DELETE_KEYWORD);
    }

    public static function requestProductDestinations(): self
    {
        return (new static())->set(static::REQUEST_PRODUCT_DESTINATIONS);
    }

    public function isRequestProductDestinations(): bool
    {
        return $this->is(static::REQUEST_PRODUCT_DESTINATIONS);
    }
}
