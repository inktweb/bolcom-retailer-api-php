<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V6;

use Inktweb\Bolcom\RetailerApi\Models\V6\ReducedOrders;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V6\Orders
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
