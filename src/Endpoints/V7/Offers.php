<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V7\CreateOfferExportRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\CreateOfferRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V7\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V7\RetailerOffer;
use Inktweb\Bolcom\RetailerApi\Models\V7\UpdateOfferPriceRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\UpdateOfferRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\UpdateOfferStockRequest;
use Psr\Http\Message\StreamInterface;

final class Offers extends Endpoint
{
    /**
     * Create a new offer.
     *
     * Creates a new offer, and adds it to the catalog. After creation,
     * status information can be retrieved to review if the offer is valid
     * and published to the shop.
     */
    public function postOffer(CreateOfferRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'offers',
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
     * Request an offer export file.
     *
     * Request an offer export file containing all offers.
     */
    public function postOfferExport(CreateOfferExportRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'offers/export',
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
     * Retrieve an offer export file by offer export id.
     *
     * Retrieve an offer export file containing all offers.
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
                'application/vnd.retailer.v7+csv',
                ],
                [
                'application/vnd.retailer.v7+csv',
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
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
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
     */
    public function putOffer(string $offerId, UpdateOfferRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'offers/{offer-id}',
                [
                'offer-id' => $offerId,
                ],
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
     * Delete offer by id.
     *
     * Delete an offer by id.
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
     * Update price(s) for offer by id.
     *
     * Update price(s) for offer by id.
     */
    public function updateOfferPrice(string $offerId, UpdateOfferPriceRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'offers/{offer-id}/price',
                [
                'offer-id' => $offerId,
                ],
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
     * Update stock for offer by id.
     *
     * Update stock for offer by id.
     */
    public function updateOfferStock(string $offerId, UpdateOfferStockRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'offers/{offer-id}/stock',
                [
                'offer-id' => $offerId,
                ],
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
}
