<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V8\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V8\Retailer\Replenishments\LabelType;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\CreateReplenishmentRequest;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\DeliveryDatesResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\PickupTimeSlotsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\PickupTimeSlotsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\ProductDestinationsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\ProductLabelsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\ReplenishmentResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\ReplenishmentsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\RequestProductDestinationsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\UpdateReplenishmentRequest;
use Psr\Http\Message\StreamInterface;

final class Replenishments extends Endpoint
{
    /**
     * Get replenishments.
     *
     * Gets a list of replenishments.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getReplenishments(
        ?string $reference = null,
        ?string $ean = null,
        ?string $startDate = null,
        ?string $endDate = null,
        ?array $state = null,
        ?int $page = null
    ): ReplenishmentsResponse {
        return ReplenishmentsResponse::fromArray(
            $this->request(
                'get',
                'replenishments',
                [],
                [
                    'reference' => $reference,
                    'ean' => $ean,
                    'start-date' => $startDate,
                    'end-date' => $endDate,
                    'state' => $state,
                    'page' => $page,
                ],
                null,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Create a replenishment.
     *
     * Creates a replenishment.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postReplenishment(CreateReplenishmentRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'replenishments',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get delivery dates.
     *
     * Retrieve a list of available delivery dates for a replenishment.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getDeliveryDates(): DeliveryDatesResponse
    {
        return DeliveryDatesResponse::fromArray(
            $this->request(
                'get',
                'replenishments/delivery-dates',
                [],
                [],
                null,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Post pickup time slots.
     *
     * Retrieve pickup time slots.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postPickupTimeSlots(PickupTimeSlotsRequest $body): PickupTimeSlotsResponse
    {
        return PickupTimeSlotsResponse::fromArray(
            $this->request(
                'post',
                'replenishments/pickup-time-slots',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Request product destinations.
     *
     * Requests a list of product destinations by EANs.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postRequestProductDestinations(RequestProductDestinationsRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'replenishments/product-destinations',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get product destinations by product destinations id.
     *
     * Gets the product destinations for one or more products by product
     * destinations id.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getProductDestinations(string $productDestinationsId): ProductDestinationsResponse
    {
        return ProductDestinationsResponse::fromArray(
            $this->request(
                'get',
                'replenishments/product-destinations/{product-destinations-id}',
                [
                    'product-destinations-id' => $productDestinationsId,
                ],
                [],
                null,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                    404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Post product labels.
     *
     * Retrieve product labels.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postProductLabels(ProductLabelsRequest $body): StreamInterface
    {
        return
            $this->request(
                'post',
                'replenishments/product-labels',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+pdf',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ]
            )->getBody();
    }

    /**
     * Get a replenishment by replenishment id.
     *
     * Gets a replenishment by replenishment id.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getReplenishment(string $replenishmentId): ReplenishmentResponse
    {
        return ReplenishmentResponse::fromArray(
            $this->request(
                'get',
                'replenishments/{replenishment-id}',
                [
                    'replenishment-id' => $replenishmentId,
                ],
                [],
                null,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Update a replenishment by replenishment id.
     *
     * Updates a replenishment.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function putReplenishment(string $replenishmentId, UpdateReplenishmentRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'replenishments/{replenishment-id}',
                [
                    'replenishment-id' => $replenishmentId,
                ],
                [],
                $body,
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get load carrier labels.
     *
     * Retrieve the load carrier labels.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getLoadCarrierLabels(string $replenishmentId, ?LabelType $labelType = null): StreamInterface
    {
        return
            $this->request(
                'get',
                'replenishments/{replenishment-id}/load-carrier-labels',
                [
                    'replenishment-id' => $replenishmentId,
                ],
                [
                    'label-type' => $labelType,
                ],
                null,
                [
                    'application/vnd.retailer.v8+pdf',
                ],
                [
                    'application/vnd.retailer.v8+pdf',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ]
            )->getBody();
    }

    /**
     * Get pick list.
     *
     * Retrieve the pick list.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getPickList(string $replenishmentId): StreamInterface
    {
        return
            $this->request(
                'get',
                'replenishments/{replenishment-id}/pick-list',
                [
                    'replenishment-id' => $replenishmentId,
                ],
                [],
                null,
                [
                    'application/vnd.retailer.v8+pdf',
                ],
                [
                    'application/vnd.retailer.v8+pdf',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ]
            )->getBody();
    }
}
