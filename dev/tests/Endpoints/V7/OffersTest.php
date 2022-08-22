<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Condition\Category;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Condition\Name;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Fulfilment\DeliveryCode;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Fulfilment\Method;
use Inktweb\Bolcom\RetailerApi\Models\V7\BundlePrice;
use Inktweb\Bolcom\RetailerApi\Models\V7\Condition;
use Inktweb\Bolcom\RetailerApi\Models\V7\CreateOfferRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\Fulfilment;
use Inktweb\Bolcom\RetailerApi\Models\V7\Pricing;
use Inktweb\Bolcom\RetailerApi\Models\V7\StockCreate;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V7\Offers
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
