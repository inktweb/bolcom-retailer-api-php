<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V10;

use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\ReducedOrders;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V9\Retailer\Orders
 */
class OrdersTest extends BaseTest
{
    /**
     * @covers ::getOrders
     */
    public function testGetOrders(): void
    {
        $orders = $this->getClient()
            ->retailer()
            ->orders()
            ->getOrders();

        $this->assertInstanceOf(ReducedOrders::class, $orders);
    }
}
