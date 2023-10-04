<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V9\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V9\Retailer\ProductContent\AcceptLanguage;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\CatalogProduct;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\ChunkRecommendationsRequest;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\ChunkRecommendationsResponse;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\CreateProductContentSingleRequest;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V9\Retailer\UploadReportResponse;

final class ProductContent extends Endpoint
{
    /**
     * Get catalog product details by EAN.
     *
     * Gets the details of a catalog product by means of its EAN.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getCatalogProduct(string $ean, ?AcceptLanguage $acceptLanguage = null): CatalogProduct
    {
        return CatalogProduct::fromArray(
            $this->request(
                'get',
                'content/catalog-products/{ean}',
                [
                    'ean' => $ean,
                ],
                [],
                null,
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    400 => Problem::class,
                    404 => Problem::class,
                    406 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get chunk recommendations.
     *
     * Gets a selected number of recommendations for a product.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getChunkRecommendations(ChunkRecommendationsRequest $body): ChunkRecommendationsResponse
    {
        return ChunkRecommendationsResponse::fromArray(
            $this->request(
                'post',
                'content/chunk-recommendations',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Create content for a product.
     *
     * Create content for an existing product.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function postProductContent(CreateProductContentSingleRequest $body): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'content/products',
                [],
                [],
                $body,
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get an upload report by upload id.
     *
     * Gets the upload report of the product content submitted by upload id.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getUploadReport(string $uploadId): UploadReportResponse
    {
        return UploadReportResponse::fromArray(
            $this->request(
                'get',
                'content/upload-report/{upload-id}',
                [
                    'upload-id' => $uploadId,
                ],
                [],
                null,
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    'application/vnd.retailer.v9+json',
                ],
                [
                    404 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}
