<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V5\CreateProductContentRequest;
use Inktweb\Bolcom\RetailerApi\Models\V5\Problem;
use Inktweb\Bolcom\RetailerApi\Models\V5\ProcessStatus;
use Inktweb\Bolcom\RetailerApi\Models\V5\ValidationReportResponse;

final class ProductContent extends Endpoint
{
    /**
     * Post product content.
     *
     * Create content for existing products or new products.
     */
    public function postProductContent(?CreateProductContentRequest $body = null): ProcessStatus
    {
        return ProcessStatus::fromArray(
            $this->request(
                'post',
                'content/product',
                [],
                [],
                $body,
                'application/vnd.retailer.v5+json',
                'application/vnd.retailer.v5+json',
                [
                400 => Problem::class,
                ]
            )
        );
    }

    /**
     * Get validation report.
     *
     * Retrieve a validation report of the product content upload based on
     * the upload id.
     */
    public function getValidationReport(string $uploadId): ValidationReportResponse
    {
        return ValidationReportResponse::fromArray(
            $this->request(
                'get',
                'content/validation-report/{uploadId}',
                [
                'uploadId' => $uploadId,
                ],
                [],
                null,
                null,
                'application/vnd.retailer.v5+json',
                [
                404 => Problem::class,
                ]
            )
        );
    }
}