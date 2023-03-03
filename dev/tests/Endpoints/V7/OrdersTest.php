<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\ReducedOrders;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V7\Retailer\Orders
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
