<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V6\Orders\FulfilmentMethod;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V6\Orders\Status;
use Inktweb\Bolcom\RetailerApi\Models\V6\ContainerForTheOrderItemsThatHaveToBeCancelled;
use Inktweb\Bolcom\RetailerApi\Models\V6\Order;
use Inktweb\Bolcom\RetailerApi\Models\V6\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V6\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V6\ReducedOrders;
use Inktweb\Bolcom\RetailerApi\Models\V6\ShipmentRequest;

final class Orders extends Endpoint
{
    /**
     * Get orders.
     *
     * Gets a paginated list of all orders sorted by date in descending
     * order. To create a pick list you can set state to open.
     */
    public function getOrders(
        ?int $page = null,
        ?FulfilmentMethod $fulfilmentMethod = null,
        ?Status $status = null
    ): ReducedOrders {
        return ReducedOrders::fromArray(
            $this->request(
                'get',
                'orders',
                [],
                [
                'page' => $page,
                'fulfilment-method' => $fulfilmentMethod,
                'status' => $status,
                ],
                null,
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                'application/vnd.retailer.v6+json',
                ],
                []
            )->getBody()->getJson()
        );
    }

    /**
     * Cancel an order item by an order item id.
     *
     * This endpoint can be used to either confirm a cancellation request by
     * the customer or to cancel an order item you yourself are unable to
     * fulfil.
     */
    public function cancelOrderItem(ContainerForTheOrderItemsThatHaveToBeCancelled $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'orders/cancellation',
                [],
                [],
                $body,
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Ship order item.
     *
     * Ship a single order item within a customer order by providing shipping
     * information. If you purchased a shipping label you should add the
     * shippingLabelId to this message and leave the transport element empty.
     * If you will ship the item using your own transporter method you must
     * omit the shippingLabelId entirely and fill in the transport element
     * with the fields from GET shipping labels.
     */
    public function shipOrderItem(ShipmentRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'orders/shipment',
                [],
                [],
                $body,
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get order.
     *
     * Gets an order by order id. The order can be partially shipped or
     * cancelled, and the message contains the quantity shipped or cancelled
     * items. The unitPrice takes account of volume discounts.
     */
    public function getOrder(string $orderId): Order
    {
        return Order::fromArray(
            $this->request(
                'get',
                'orders/{order-id}',
                [
                'order-id' => $orderId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}
