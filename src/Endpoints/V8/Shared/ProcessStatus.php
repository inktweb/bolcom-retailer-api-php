<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V8\Shared;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V8\Shared\ProcessStatus\EventType;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V8\Shared\BulkProcessStatusRequest;
use Inktweb\Bolcom\RetailerApi\Models\V8\Shared\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V8\Shared\ProcessStatus as ProcessStatusSharedModel;
use Inktweb\Bolcom\RetailerApi\Models\V8\Shared\ProcessStatusResponse;

final class ProcessStatus extends Endpoint
{
    /**
     * Get the status of an asynchronous process by entity id and event type
     * for a retailer.
     *
     * Retrieve a list of process statuses, which shows information regarding
     * previously executed PUT/POST/DELETE requests in descending order. You
     * need to supply an entity id and event type. Please note: process
     * status instances are only retained for a limited period of time after
     * completion. Outside of this period, deleted process statuses will no
     * longer be returned. Please handle this accordingly, by stopping any
     * active polling for these statuses.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getProcessStatusEntityId(
        string $entityId,
        EventType $eventType,
        ?int $page = null
    ): ProcessStatusResponse {
        return ProcessStatusResponse::fromArray(
            $this->request(
                'get',
                '/shared/process-status',
                [],
                [
                    'entity-id' => $entityId,
                    'event-type' => $eventType,
                    'page' => $page,
                ],
                null,
                [
                    'application/vnd.retailer.v8+json',
                    'application/vnd.advertiser.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                    'application/vnd.advertiser.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get the status of multiple asynchronous processes by an array of
     * process status ids for a retailer.
     *
     * Retrieve a list of process statuses, which shows information regarding
     * previously executed PUT/POST/DELETE requests. No more than 1000
     * process status id's can be sent in a single request. Please note:
     * process status instances are only retained for a limited period of
     * time after completion. Outside of this period, deleted process
     * statuses will no longer be returned. Please handle this accordingly,
     * by stopping any active polling for these statuses.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getProcessStatusBulk(BulkProcessStatusRequest $body): ProcessStatusResponse
    {
        return ProcessStatusResponse::fromArray(
            $this->request(
                'post',
                '/shared/process-status',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v8+json',
                    'application/vnd.advertiser.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                    'application/vnd.advertiser.v8+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get the status of an asynchronous process by process status id.
     *
     * Retrieve a specific process status, which shows information regarding
     * a previously executed PUT/POST/DELETE request. All PUT/POST/DELETE
     * requests on the other endpoints will supply a process status id in the
     * related response. You can use this id to retrieve a status by using
     * the endpoint below. Please note: process status instances are only
     * retained for a limited period of time after completion. Outside of
     * this period, a 404 will be returned for missing process statuses.
     * Please handle this accordingly, by stopping any active polling for
     * these statuses.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getProcessStatus(string $processStatusId): ProcessStatusSharedModel
    {
        return ProcessStatusSharedModel::fromArray(
            $this->request(
                'get',
                '/shared/process-status/{process-status-id}',
                [
                    'process-status-id' => $processStatusId,
                ],
                [],
                null,
                [
                    'application/vnd.retailer.v8+json',
                    'application/vnd.advertiser.v8+json',
                ],
                [
                    'application/vnd.retailer.v8+json',
                    'application/vnd.advertiser.v8+json',
                ],
                [
                    404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}
