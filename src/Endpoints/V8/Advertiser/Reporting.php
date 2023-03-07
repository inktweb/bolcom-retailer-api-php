<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V8\Advertiser;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\AdGroupPerformanceResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\AdvertiserPerformanceResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\CampaignPerformanceResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\KeywordPerformanceResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\ProductPerformanceResponse;
use Inktweb\Bolcom\RetailerApi\Models\V8\Advertiser\SearchTermPerformanceResponse;

final class Reporting extends Endpoint
{
    /**
     * Get ad group performance results.
     *
     * Gets the performance results of an ad group for the period requested.
     * The results are aggregated per day.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getAdGroupPerformance(
        string $adGroupId,
        string $startDate,
        string $endDate
    ): AdGroupPerformanceResponse {
        return AdGroupPerformanceResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/ad-group-performance/{ad-group-id}',
                [
                'ad-group-id' => $adGroupId,
                ],
                [
                'start-date' => $startDate,
                'end-date' => $endDate,
                ],
                null,
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get advertiser performance results.
     *
     * Gets the advertiser performance results for the period requested. The
     * results are aggregated per day.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getAdvertiserPerformance(string $startDate, string $endDate): AdvertiserPerformanceResponse
    {
        return AdvertiserPerformanceResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/advertiser-performance',
                [],
                [
                'start-date' => $startDate,
                'end-date' => $endDate,
                ],
                null,
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get campaign performance results.
     *
     * Gets the performance results of a campaign for the period requested.
     * The results are aggregated per day.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getCampaignPerformance(
        string $campaignId,
        string $startDate,
        string $endDate
    ): CampaignPerformanceResponse {
        return CampaignPerformanceResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/campaign-performance/{campaign-id}',
                [
                'campaign-id' => $campaignId,
                ],
                [
                'start-date' => $startDate,
                'end-date' => $endDate,
                ],
                null,
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get keyword performance results.
     *
     * Gets the performance results of all keywords within an ad group for
     * the period requested. The results are returned per keyword and are
     * aggregated to the period requested.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getKeywordPerformance(
        string $adGroupId,
        string $startDate,
        string $endDate
    ): KeywordPerformanceResponse {
        return KeywordPerformanceResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/keyword-performance/{ad-group-id}',
                [
                'ad-group-id' => $adGroupId,
                ],
                [
                'start-date' => $startDate,
                'end-date' => $endDate,
                ],
                null,
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get product performance results.
     *
     * Gets the performance results of all target products within an ad group
     * for the period requested. The results are returned per target product
     * and are aggregated to the period requested.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getProductPerformance(
        string $adGroupId,
        string $startDate,
        string $endDate
    ): ProductPerformanceResponse {
        return ProductPerformanceResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/product-performance/{ad-group-id}',
                [
                'ad-group-id' => $adGroupId,
                ],
                [
                'start-date' => $startDate,
                'end-date' => $endDate,
                ],
                null,
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get search term performance results.
     *
     * Gets the performance results of all search terms within an ad group
     * for the period requested. The results are returned per search term and
     * are aggregated to the period requested.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getSearchTermPerformance(
        string $adGroupId,
        string $startDate,
        string $endDate
    ): SearchTermPerformanceResponse {
        return SearchTermPerformanceResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/search-term-performance/{ad-group-id}',
                [
                'ad-group-id' => $adGroupId,
                ],
                [
                'start-date' => $startDate,
                'end-date' => $endDate,
                ],
                null,
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                'application/vnd.advertiser.v8+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}