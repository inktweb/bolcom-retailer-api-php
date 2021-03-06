<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V5\ChangeTransportRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V5\ProcessStatus;

final class Transports extends Endpoint
{
    /**
     * Add transport information by transport id.
     *
     * Add information to an existing transport. The transport id is part of
     * the shipment. You can retrieve the transport id through the GET
     * shipment list request.
     */
    public function addTransportInformationByTransportId(
        string $transportId,
        ChangeTransportRequest $body
    ): ProcessStatus {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'transports/{transport-id}',
                [
                'transport-id' => $transportId,
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
            )->getBody()->getJson()
        );
    }
}
