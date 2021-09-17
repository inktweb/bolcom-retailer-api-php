<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V5\Insights\Name;
use Inktweb\Bolcom\RetailerApi\Models\V5\PerformanceIndicator;
use Inktweb\Bolcom\RetailerApi\Models\V5\PerformanceIndicators;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V5\Insights
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
            ->insights()
            ->getPerformanceIndicator(Name::returns(), 2021, 29);

        $this->assertInstanceOf(PerformanceIndicators::class, $indicators);

        [$indicator] = $indicators->getPerformanceIndicators();

        $this->assertInstanceOf(PerformanceIndicator::class, $indicator);
    }
}
