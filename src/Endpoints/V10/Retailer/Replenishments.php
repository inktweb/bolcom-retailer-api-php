<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V10\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V10\Retailer\Replenishments\LabelType;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\CreateReplenishmentRequest;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\DeliveryDatesResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\PickupTimeSlotsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\PickupTimeSlotsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ProductDestinationsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ProductLabelsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ReplenishmentResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ReplenishmentsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\RequestProductDestinationsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\UpdateReplenishmentRequest;
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
     * Create a replenishment.
     *
     * Creates a replenishment.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postReplenishment(CreateReplenishmentRequest $createReplenishmentRequest): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'replenishments',
                [],
                [],
                $createReplenishmentRequest,
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
     * Post pickup time slots.
     *
     * Retrieve pickup time slots.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postPickupTimeSlots(PickupTimeSlotsRequest $pickupTimeSlotsRequest): PickupTimeSlotsResponse
    {
        return PickupTimeSlotsResponse::fromArray(
            $this->request(
                'post',
                'replenishments/pickup-time-slots',
                [],
                [],
                $pickupTimeSlotsRequest,
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
     * Request product destinations.
     *
     * Requests a list of product destinations by EANs.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postRequestProductDestinations(RequestProductDestinationsRequest $requestProductDestinationsRequest): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'replenishments/product-destinations',
                [],
                [],
                $requestProductDestinationsRequest,
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
     * Post product labels.
     *
     * Retrieve product labels.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postProductLabels(ProductLabelsRequest $productLabelsRequest): StreamInterface
    {
        return
            $this->request(
                'post',
                'replenishments/product-labels',
                [],
                [],
                $productLabelsRequest,
                [
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ],
                [],
                null
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
                    'application/vnd.retailer.v10+json',
                ],
                [
                    'application/vnd.retailer.v10+json',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ],
                [],
                null
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
    public function putReplenishment(
        string $replenishmentId,
        UpdateReplenishmentRequest $updateReplenishmentRequest
    ): ProcessStatus {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'replenishments/{replenishment-id}',
                [
                    'replenishment-id' => $replenishmentId,
                ],
                [],
                $updateReplenishmentRequest,
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
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ],
                [],
                null
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
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    'application/vnd.retailer.v10+pdf',
                ],
                [
                    404 => Problem::class,
                    400 => Problem::class,
                ],
                [],
                null
            )->getBody();
    }
}
