<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V5\CreateReplenishmentRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\PickupTimeSlotsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\PickupTimeSlotsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V5\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V5\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V5\ProductLabelsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\ReplenishmentResponse;
use Inktweb\Bolcom\RetailerApi\Models\V5\ReplenishmentsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V5\UpdateReplenishmentRequest;

final class Replenishments extends Endpoint
{
    /**
     * Get replenishments.
     *
     * Gets a list of replenishments.
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
                null,
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Post replenishment.
     *
     * Create a replenishment.
     */
    public function postReplenishment(?CreateReplenishmentRequest $body = null): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'replenishments',
                [],
                [],
                $body,
                'application/vnd.retailer.v5+json',
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Post pickup time slots.
     *
     * Retrieve pickup time slots.
     */
    public function postPickupTimeSlots(?PickupTimeSlotsRequest $body = null): PickupTimeSlotsResponse
    {
        return PickupTimeSlotsResponse::fromArray(
            $this->request(
                'post',
                'replenishments/pickup-time-slots',
                [],
                [],
                $body,
                'application/vnd.retailer.v5+json',
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Post product labels.
     *
     * Retrieve product labels.
     */
    public function postProductLabels(?ProductLabelsRequest $body = null): array
    {
        return (array)
            $this->request(
                'post',
                'replenishments/product-labels',
                [],
                [],
                $body,
                'application/vnd.retailer.v5+json',
                'application/vnd.retailer.v5+pdf',
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )
        ;
    }

    /**
     * Get a replenishment by replenishment id.
     *
     * Gets a replenishment by replenishment id.
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
                null,
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )
        );
    }

    /**
     * Update replenishment.
     *
     * Update a replenishment.
     */
    public function putReplenishment(string $replenishmentId, ?UpdateReplenishmentRequest $body = null): ProcessStatus
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
                'application/vnd.retailer.v5+json',
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Get load carrier labels.
     *
     * Retrieve the load carrier labels.
     */
    public function getLoadCarrierLabels(string $replenishmentId, string $labelType): array
    {
        return (array)
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
                null,
                'application/vnd.retailer.v5+pdf',
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )
        ;
    }

    /**
     * Get pick list.
     *
     * Retrieve the pick list.
     */
    public function getPickList(string $replenishmentId): array
    {
        return (array)
            $this->request(
                'get',
                'replenishments/{replenishment-id}/pick-list',
                [
                'replenishment-id' => $replenishmentId,
                ],
                [],
                null,
                null,
                'application/vnd.retailer.v5+pdf',
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )
        ;
    }
}
