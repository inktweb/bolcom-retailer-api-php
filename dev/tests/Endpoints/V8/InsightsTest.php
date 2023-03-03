<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V8;

use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V8\Retailer\Insights\Name;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\PerformanceIndicator;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\PerformanceIndicators;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V8\Retailer\Insights
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
