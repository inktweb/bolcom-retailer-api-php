<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V5\ContainerForTheOrderItemsThatHaveToBeCancelled;
use Inktweb\Bolcom\RetailerApi\Models\V5\Order;
use Inktweb\Bolcom\RetailerApi\Models\V5\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V5\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V5\ReducedOrders;
use Inktweb\Bolcom\RetailerApi\Models\V5\ShipmentRequest;

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
        ?string $fulfilmentMethod = null,
        ?string $status = null
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
                null,
                'application/vnd.retailer.v5+json',
                []
            )
        );
    }

    /**
     * Cancel an order item by an order item id.
     *
     * This endpoint can be used to either confirm a cancellation request by
     * the customer or to cancel an order item you yourself are unable to
     * fulfil.
     */
    public function cancelOrderItem(?ContainerForTheOrderItemsThatHaveToBeCancelled $body = null): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'orders/cancellation',
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
     * Ship order item.
     *
     * Ship a single order item within a customer order by providing shipping
     * information. In case you purchased a shipping label you can add the
     * shippingLabelId to this message; in that case the transport element
     * must be left empty. If you ship the item(s) using your own transporter
     * method you must omit the shippingLabelId entirely.
     */
    public function shipOrderItem(?ShipmentRequest $body = null): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                'orders/shipment',
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
     * Get order.
     *
     * Gets an order by order id. The order can be partially shipped or
     * cancelled, the message contains the quantity shipped or cancelled
     * items.
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
                null,
                'application/vnd.retailer.v5+json',
                [
                404 => Problem::class,
                ]
            )
        );
    }
}