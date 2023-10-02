<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V9\Advertiser;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser\CreateNegativeKeywordRequest;
use Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser\NegativeKeyword;
use Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser\NegativeKeywordsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V9\Advertiser\ProcessStatus;

final class NegativeKeywords extends Endpoint
{
    /**
     * Get a list of negative keywords.
     *
     * Gets a paginated list of all negative keywords that are present within
     * an ad group.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getNegativeKeywords(string $adGroupId, ?int $page = null): NegativeKeywordsResponse
    {
        return NegativeKeywordsResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/negative-keywords',
                [],
                [
                'ad-group-id' => $adGroupId,
                'page' => $page,
                ],
                null,
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Create a negative keyword.
     *
     * Creates a negative keyword and adds it to an ad group.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postNegativeKeyword(CreateNegativeKeywordRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                '/advertiser/sponsored-products/negative-keywords',
                [],
                [],
                $body,
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get a negative keyword by keyword id.
     *
     * Gets the details of a negative keywords.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getNegativeKeyword(string $keywordId): NegativeKeyword
    {
        return NegativeKeyword::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/negative-keywords/{keyword-id}',
                [
                'keyword-id' => $keywordId,
                ],
                [],
                null,
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Delete a negative keyword by keyword id.
     *
     * Deletes a negative keyword.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function deleteNegativeKeyword(string $keywordId): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'delete',
                '/advertiser/sponsored-products/negative-keywords/{keyword-id}',
                [
                'keyword-id' => $keywordId,
                ],
                [],
                null,
                [
                'application/vnd.advertiser.v9+json',
                ],
                [
                'application/vnd.advertiser.v9+json',
                ],
                []
            )->getBody()->getJson()
        );
    }
}