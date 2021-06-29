<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V5\CreateReturnRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V5\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V5\ReturnMerchandise;
use Inktweb\Bolcom\RetailerApi\Models\V5\ReturnRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\ReturnsResponse;

final class Returns extends Endpoint
{
    /**
     * Get returns.
     *
     * Get a paginated list of multi-item returns, which are sorted by date
     * in descending order.
     */
    public function getReturns(
        ?int $page = null,
        ?bool $handled = null,
        ?string $fulfilmentMethod = null
    ): ReturnsResponse {
        return ReturnsResponse::fromArray(
            $this->request(
                'get',
                'returns',
                [],
                [
                'page' => $page,
                'handled' => $handled,
                'fulfilment-method' => $fulfilmentMethod,
                ],
                null,
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Create return.
     *
     * Create a return, and automatically handle it with the provided
     * handling result. When successfully created, the resulting return id is
     * provided in the process status.
     */
    public function createReturn(?CreateReturnRequest $body = null): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'returns',
                [],
                [],
                $body,
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Get a return by return id.
     *
     * Retrieve a return based on the return id.
     */
    public function getReturn(string $returnId): ReturnMerchandise
    {
        return ReturnMerchandise::fromArray(
            $this->request(
                'get',
                'returns/{return-id}',
                [
                'return-id' => $returnId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                404 => Problem::class,
                ]
            )
        );
    }

    /**
     * Handle a return.
     *
     * Allows the user to handle a return. This can be to either handle an
     * open return, or change the handlingResult of an already handled
     * return. The latter is only possible in limited scenarios, please check
     * the returns documentation for a complete list.
     */
    public function handleReturn(int $rmaId, ?ReturnRequest $body = null): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'returns/{rma-id}',
                [
                'rma-id' => $rmaId,
                ],
                [],
                $body,
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                'application/vnd.retailer.v5+json',
                ],
                [
                400 => Problem::class,
                ]
            )
        );
    }
}
