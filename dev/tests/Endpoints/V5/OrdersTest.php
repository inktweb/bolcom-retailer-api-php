<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Models\V5\ReducedOrders;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V5\Orders
 */
class OrdersTest extends BaseTest
{
    /**
     * @covers ::getOrders
     */
    public function testGetOrders(): void
    {
        $orders = $this->getClient()
            ->orders()
            ->getOrders();

        $this->assertInstanceOf(ReducedOrders::class, $orders);
    }
}
