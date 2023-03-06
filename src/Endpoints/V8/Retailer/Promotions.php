<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V8\Retailer;

use GuzzleHttp\Exception\GuzzleException;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V8\Retailer\Promotions\PromotionType;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\Products;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\Promotion;
use Inktweb\Bolcom\RetailerApi\Models\V8\Retailer\Promotions as PromotionsRetailerModel;

final class Promotions extends Endpoint
{
    /**
     * Get a list of promotions.
     *
     * Gets a paginated list of all promotions for a retailer.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getPromotions(PromotionType $promotionType, ?int $page = null): PromotionsRetailerModel
    {
        return PromotionsRetailerModel::fromArray(
            $this->request(
                'get',
                'promotions',
                [],
                [
                'promotion-type' => $promotionType,
                'page' => $page,
                ],
                null,
                [
                'application/vnd.retailer.v8+json',
                ],
                [
                'application/vnd.retailer.v8+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get a promotion by promotion id.
     *
     * Gets the details of a promotion.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getPromotion(string $promotionId): Promotion
    {
        return Promotion::fromArray(
            $this->request(
                'get',
                'promotions/{promotion-id}',
                [
                'promotion-id' => $promotionId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v8+json',
                ],
                [
                'application/vnd.retailer.v8+json',
                ],
                [
                404 => Problem::class,
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }

    /**
     * Get a list of products.
     *
     * Gets a paginated list of all products that are present within a
     * promotion.
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    public function getProducts(string $promotionId, ?int $page = null): Products
    {
        return Products::fromArray(
            $this->request(
                'get',
                'promotions/{promotion-id}/products',
                [
                'promotion-id' => $promotionId,
                ],
                [
                'page' => $page,
                ],
                null,
                [
                'application/vnd.retailer.v8+json',
                ],
                [
                'application/vnd.retailer.v8+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody()->getJson()
        );
    }
}
