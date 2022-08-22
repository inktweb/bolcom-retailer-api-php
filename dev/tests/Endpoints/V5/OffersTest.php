<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\Condition\Category;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\Condition\Name;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\Fulfilment\DeliveryCode;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V5\Fulfilment\Method;
use Inktweb\Bolcom\RetailerApi\Models\V5\BundlePrice;
use Inktweb\Bolcom\RetailerApi\Models\V5\Condition;
use Inktweb\Bolcom\RetailerApi\Models\V5\CreateOfferRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\Fulfilment;
use Inktweb\Bolcom\RetailerApi\Models\V5\Pricing;
use Inktweb\Bolcom\RetailerApi\Models\V5\StockCreate;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V5\Offers
 */
class OffersTest extends BaseTest
{
    /**
     * @covers ::postOffer
     */
    public function testPostOffer(): void
    {
        $processStatus = $this->getClient()
            ->offers()
            ->postOffer(
                (new CreateOfferRequest())
                    ->setEan('7567560732428')
                    ->setCondition(
                        (new Condition())
                            ->setName(
                                Name::new()
                            )
                            ->setCategory(
                                Category::new()
                            )
                    )
                    ->setPricing(
                        (new Pricing())
                            ->setBundlePrices(
                                (new BundlePrice())
                                    ->setQuantity(1)
                                    ->setUnitPrice(13.37)
                            )
                    )
                    ->setStock(
                        (new StockCreate())
                            ->setAmount(13)
                            ->setManagedByRetailer(true)
                    )
                    ->setFulfilment(
                        (new Fulfilment())
                            ->setMethod(
                                Method::fbr()
                            )
                            ->setDeliveryCode(
                                DeliveryCode::deliveryCode48d()
                            )
                    )
            );

        $this->assertTrue($processStatus->getStatus()->isPending());
    }
}
