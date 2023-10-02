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
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\RetailerOffer;
use Psr\Http\Message\StreamInterface;

final class Offers extends Endpoint
{
    /**
     * Create a new offer.
     *
     * Creates a new offer, and adds it to the catalog. After creation,
     * status information can be retrieved to review if the offer is valid
     * and published to the shop.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postOffer(): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'offers',
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Request an offer export file.
     *
     * Request an offer export file containing all offers.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postOfferExport(): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'offers/export',
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Retrieve an offer export file by report id.
     *
     * Retrieve an offer export file containing all offers.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getOfferExport(string $reportId): StreamInterface
    {
        return
            $this->request(
                'get',
                'offers/export/{report-id}',
                [
                'report-id' => $reportId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v10+csv',
                ],
                [
                'application/vnd.retailer.v10+csv',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody();
    }

    /**
     * Request an unpublished offer report.
     *
     * Request an unpublished offer report containing all unpublished offers
     * and reasons.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postUnpublishedOfferReport(): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'offers/unpublished',
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Retrieve an unpublished offer report by report id.
     *
     * Retrieve an unpublished offer report containing all unpublished offers
     * and reasons.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getUnpublishedOfferReport(string $reportId): StreamInterface
    {
        return
            $this->request(
                'get',
                'offers/unpublished/{report-id}',
                [
                'report-id' => $reportId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v10+csv',
                ],
                [
                'application/vnd.retailer.v10+csv',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody();
    }

    /**
     * Retrieve an offer by its offer id.
     *
     * Retrieve an offer by using the offer id provided to you when creating
     * or listing your offers.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getOffer(string $offerId): RetailerOffer
    {
        return RetailerOffer::fromArray(
            $this->request(
                'get',
                'offers/{offer-id}',
                [
                'offer-id' => $offerId,
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Update an offer.
     *
     * Use this endpoint to send an offer update. This endpoint returns a
     * process status.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function putOffer(string $offerId): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'offers/{offer-id}',
                [
                'offer-id' => $offerId,
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Delete offer by id.
     *
     * Delete an offer by id.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function deleteOffer(string $offerId): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'delete',
                'offers/{offer-id}',
                [
                'offer-id' => $offerId,
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Update price(s) for offer by id.
     *
     * Update price(s) for offer by id.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function updateOfferPrice(string $offerId): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'offers/{offer-id}/price',
                [
                'offer-id' => $offerId,
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
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Update stock for offer by id.
     *
     * Update stock for offer by id.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function updateOfferStock(string $offerId): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'offers/{offer-id}/stock',
                [
                'offer-id' => $offerId,
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
                ]
            )->getBody()->getJson()
        );
    }
}
