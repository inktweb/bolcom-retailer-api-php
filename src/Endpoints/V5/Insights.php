<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V5\OfferInsights;
use Inktweb\Bolcom\RetailerApi\Models\V5\PerformanceIndicators;
use Inktweb\Bolcom\RetailerApi\Models\V5\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V5\SalesForecastResponse;
use Inktweb\Bolcom\RetailerApi\Models\V5\SearchTerms;

final class Insights extends Endpoint
{
    /**
     * Get offer insights.
     *
     * Get the product visits and the buy box percentage for an offer during
     * a given period.
     */
    public function getOfferInsights(string $offerId, string $period, int $numberOfPeriods, array $name): OfferInsights
    {
        return OfferInsights::fromArray(
            $this->request(
                'get',
                'insights/offer',
                [],
                [
                'offer-id' => $offerId,
                'period' => $period,
                'number-of-periods' => $numberOfPeriods,
                'name' => $name,
                ],
                null,
                null,
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Get performance indicators.
     *
     * Gets the measurements for your performance indicators per week.
     */
    public function getPerformanceIndicator(array $name, string $year, string $week): PerformanceIndicators
    {
        return PerformanceIndicators::fromArray(
            $this->request(
                'get',
                'insights/performance/indicator',
                [],
                [
                'name' => $name,
                'year' => $year,
                'week' => $week,
                ],
                null,
                null,
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Get sales forecast.
     *
     * Get sales forecast to estimate the sales expectations on the total
     * bol.com platform for the requested number of weeks ahead.
     */
    public function getSalesForecast(string $offerId, int $weeksAhead): SalesForecastResponse
    {
        return SalesForecastResponse::fromArray(
            $this->request(
                'get',
                'insights/sales-forecast',
                [],
                [
                'offer-id' => $offerId,
                'weeks-ahead' => $weeksAhead,
                ],
                null,
                null,
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Get search terms.
     *
     * Retrieves the search volume for a specified search term and period.
     * The search volume allows you to see what bol.com customers are
     * searching for. Based on the search volume per search term you can
     * optimize your product content, or spot opportunities to extend your
     * assortment, or analyzing trends for inventory management.
     */
    public function getSearchTerms(
        string $searchTerm,
        string $period,
        int $numberOfPeriods,
        ?bool $relatedSearchTerms = null
    ): SearchTerms {
        return SearchTerms::fromArray(
            $this->request(
                'get',
                'insights/search-terms',
                [],
                [
                'search-term' => $searchTerm,
                'period' => $period,
                'number-of-periods' => $numberOfPeriods,
                'related-search-terms' => $relatedSearchTerms,
                ],
                null,
                null,
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }
}