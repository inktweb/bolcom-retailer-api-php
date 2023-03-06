<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V7\Advertiser;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser\CreateTargetProductRequest;
use Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser\TargetProduct;
use Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser\TargetProductsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser\UpdateTargetProductRequest;

final class TargetProducts extends Endpoint
{
    /**
     * Get a list of target products.
     *
     * Gets a paginated list of all target products that are present within
     * an ad group.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getTargetProducts(string $adGroupId, ?int $page = null): TargetProductsResponse
    {
        return TargetProductsResponse::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/target-products',
                [],
                [
                'ad-group-id' => $adGroupId,
                'page' => $page,
                ],
                null,
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Create a target product.
     *
     * Creates a target product and adds it to an ad group.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postTargetProducts(CreateTargetProductRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                '/advertiser/sponsored-products/target-products',
                [],
                [],
                $body,
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get a target product by target product id.
     *
     * Gets the details of a target product.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getTargetProduct(string $targetProductId): TargetProduct
    {
        return TargetProduct::fromArray(
            $this->request(
                'get',
                '/advertiser/sponsored-products/target-products/{target-product-id}',
                [
                'target-product-id' => $targetProductId,
                ],
                [],
                null,
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Update a target product by target product id.
     *
     * Updates a target product.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function updateTargetProduct(string $targetProductId, UpdateTargetProductRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'put',
                '/advertiser/sponsored-products/target-products/{target-product-id}',
                [
                'target-product-id' => $targetProductId,
                ],
                [],
                $body,
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                'application/vnd.advertiser.v7+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}
