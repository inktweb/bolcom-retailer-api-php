<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V6;

use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V6\Insights\Name;
use Inktweb\Bolcom\RetailerApi\Models\V6\PerformanceIndicator;
use Inktweb\Bolcom\RetailerApi\Models\V6\PerformanceIndicators;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Endpoints\V6\Insights
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
            ->getPerformanceIndicators(Name::returns(), 2021, 29);

        $this->assertInstanceOf(PerformanceIndicators::class, $indicators);

        [$indicator] = $indicators->getPerformanceIndicators();

        $this->assertInstanceOf(PerformanceIndicator::class, $indicator);
    }
}
