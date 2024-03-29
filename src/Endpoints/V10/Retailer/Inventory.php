<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V10\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V10\Retailer\Inventory\State;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V10\Retailer\Inventory\Stock;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\InventoryResponse;
use Inktweb\Bolcom\RetailerApi\Models\V10\Retailer\Problem;

final class Inventory extends Endpoint
{
    /**
     * Get LVB/FBB inventory.
     *
     * The inventory endpoint is a specific LVB/FBB endpoint. It provides a
     * paginated list containing your fulfilment by bol.com inventory. This
     * endpoint does not provide information about your own stock.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getInventory(
        ?int $page = null,
        ?array $quantity = null,
        ?Stock $stock = null,
        ?State $state = null,
        ?string $query = null
    ): InventoryResponse {
        return InventoryResponse::fromArray(
            $this->request(
                'get',
                'inventory',
                [],
                [
                    'page' => $page,
                    'quantity' => $quantity,
                    'stock' => $stock,
                    'state' => $state,
                    'query' => $query,
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
}
