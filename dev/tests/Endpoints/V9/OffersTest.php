<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V9;

use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\Condition\Category;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\Condition\Name;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\Fulfilment\DeliveryCode;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V9\Retailer\Fulfilment\Method;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\BundlePrice;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\Condition;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\CreateOfferRequest;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\Fulfilment;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\Pricing;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\StockCreate;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V9\Retailer\Offers
 */
class OffersTest extends BaseTest
{
    /**
     * @covers ::postOffer
     */
    public function testPostOffer(): void
    {
        $processStatus = $this->getClient()
            ->retailer()
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
