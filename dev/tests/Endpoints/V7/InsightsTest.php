<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Retailer\Insights\Name;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\PerformanceIndicator;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\PerformanceIndicators;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V7\Retailer\Insights
 */
class InsightsTest extends BaseTest
{
    protected const DEMO_MODE = false;

    /**
     * @covers ::getPerformanceIndicator
     */
    public function testGetPerformanceIndicator()
    {
        $indicators = $this->getClient()
            ->retailer()
            ->insights()
            ->getPerformanceIndicators(Name::returns(), 2021, 29);

        $this->assertInstanceOf(PerformanceIndicators::class, $indicators);

        [$indicator] = $indicators->getPerformanceIndicators();

        $this->assertInstanceOf(PerformanceIndicator::class, $indicator);
    }
}
