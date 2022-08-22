<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V7;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Enums\Endpoints\V7\Promotions\PromotionType;
use Inktweb\Bolcom\RetailerApi\Models\V7\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V7\Products;
use Inktweb\Bolcom\RetailerApi\Models\V7\Promotion;
use Inktweb\Bolcom\RetailerApi\Models\V7\Promotions as PromotionsModel;

final class Promotions extends Endpoint
{
    /**
     * Get a list of promotions.
     *
     * Gets a paginated list of all promotions for a retailer.
     */
    public function getPromotions(PromotionType $promotionType, ?int $page = null): PromotionsModel
    {
        return PromotionsModel::fromArray(
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
     * Get a promotion by promotion id.
     *
     * Gets the details of a promotion.
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
                'application/vnd.retailer.v7+json',
                ],
                [
                'application/vnd.retailer.v7+json',
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
