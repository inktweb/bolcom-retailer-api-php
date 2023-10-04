<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V10\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\DeliveryOptionsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\DeliveryOptionsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ShippingLabelRequest;
use Psr\Http\Message\StreamInterface;

final class ShippingLabels extends Endpoint
{
    /**
     * Create a shipping label.
     *
     * Create a shipping label with a shipping label offer id retrieved from
     * get delivery options.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postShippingLabel(ShippingLabelRequest $shippingLabelRequest): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'shipping-labels',
                [],
                [],
                $shippingLabelRequest,
                [
                    'application/vnd.retailer.v10+json',
                ],
                [
                    'application/vnd.retailer.v10+json',
                ],
                [
                    400 => Problem::class,
                ],
                [],
                null
            )->getBody()->getJson()
        );
    }

    /**
     * Get delivery options.
     *
     * Retrieves all available delivery options based on the supplied
     * configuration of order items that has to be shipped.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getDeliveryOptions(DeliveryOptionsRequest $deliveryOptionsRequest): DeliveryOptionsResponse
    {
        return DeliveryOptionsResponse::fromArray(
            $this->request(
                'post',
                'shipping-labels/delivery-options',
                [],
                [],
                $deliveryOptionsRequest,
                [
                    'application/vnd.retailer.v10+json',
                ],
                [
                    'application/vnd.retailer.v10+json',
                ],
                [
                    400 => Problem::class,
                    404 => Problem::class,
                ],
                [],
                null
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
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
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
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    400 => Problem::class,
                    404 => Problem::class,
                ],
                [],
                null
            )->getBody();
    }
}
