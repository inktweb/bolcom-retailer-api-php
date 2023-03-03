<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\Condition\Category;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\Condition\Name;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\Fulfilment\DeliveryCode;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Retailer\Fulfilment\Method;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\BundlePrice;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\Condition;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\CreateOfferRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\Fulfilment;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\Pricing;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\StockCreate;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V7\Retailer\Offers
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
