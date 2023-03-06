<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V7\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Retailer\Insights\Name;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Retailer\Insights\Period;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\OfferInsights;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\PerformanceIndicators;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\SalesForecastResponse;
use Inktweb\Bolcom\RetailerApi\Models\V7\Retailer\SearchTerms;

final class Insights extends Endpoint
{
    /**
     * Get offer insights.
     *
     * Get the product visits and the buy box percentage for an offer during
     * a given period.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getOfferInsights(string $offerId, Period $period, int $numberOfPeriods, Name $name): OfferInsights
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
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get performance indicators.
     *
     * Gets the measurements for your performance indicators per week.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getPerformanceIndicators(Name $name, string $year, string $week): PerformanceIndicators
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
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get sales forecast.
     *
     * Get sales forecast to estimate the sales expectations on the total
     * bol.com platform for the requested number of weeks ahead.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
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
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
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
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getSearchTerms(
        string $searchTerm,
        Period $period,
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
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}
