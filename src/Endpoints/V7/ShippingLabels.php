<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V7\DeliveryOptionsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\DeliveryOptionsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V7\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V7\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V7\ShippingLabelRequest;
use Psr\Http\Message\StreamInterface;

final class ShippingLabels extends Endpoint
{
    /**
     * Create a shipping label.
     *
     * Create a shipping label with a shipping label offer id retrieved from
     * get delivery options.
     */
    public function postShippingLabel(ShippingLabelRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'shipping-labels',
                [],
                [],
                $body,
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get delivery options for a shippable configuration of a number of
     * order items within an order.
     *
     * Retrieves all available delivery options based on the supplied
     * configuration of order items that has to be shipped.
     */
    public function getDeliveryOptions(DeliveryOptionsRequest $body): DeliveryOptionsResponse
    {
        return DeliveryOptionsResponse::fromArray(
            $this->request(
                'post',
                'shipping-labels/delivery-options',
                [],
                [],
                $body,
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get a shipping label.
     *
     * Retrieves a shipping label by shipping label id. Metadata for the
     * shipping label is added as headers in the response. If you are only
     * interested in the metadata, you can do a HEAD request to retrieve only
     * the headers without the label data.
     */
    public function getShippingLabel(string $shippingLabelId): StreamInterface
    {
        return
            $this->request(
                'get',
                'shipping-labels/{shipping-label-id}',
                [
                'shipping-label-id' => $shippingLabelId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v7+pdf',
                ],
                [
                'application/vnd.retailer.v7+pdf',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody();
    }
}
