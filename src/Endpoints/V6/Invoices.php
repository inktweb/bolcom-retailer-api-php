<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Endpoints
 */

namespace Inktweb\Bolcom\RetailerApi\Endpoints\V6;

use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Models\V6\Problem;
use Psr\Http\Message\StreamInterface;

final class Invoices extends Endpoint
{
    /**
     * Get all invoices.
     *
     * Gets a list of invoices, by default from the past 4 weeks. The
     * optional period-start-date and period-end-date-date parameters can be
     * used together to retrieve invoices from a specific date range in the
     * past, the period can be no longer than 31 days. Invoices and their
     * specifications can be downloaded separately in different media formats
     * with the ‘GET an invoice by id’ and the ‘GET an invoice specification
     * by id’ calls. The available media types differ per invoice and are
     * listed per invoice within the response. Note: the media types listed
     * in the response must be given in our standard API format.
     */
    public function getInvoices(?string $periodStartDate = null, ?string $periodEndDate = null): StreamInterface
    {
        return
            $this->request(
                'get',
                'invoices',
                [],
                [
                'period-start-date' => $periodStartDate,
                'period-end-date' => $periodEndDate,
                ],
                null,
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                'application/vnd.retailer.v6+json',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody();
    }

    /**
     * Get an invoice by invoice id.
     *
     * Gets an invoice by invoice id. The available media types differ per
     * invoice and are listed within the response from the ‘GET all invoices’
     * call. Note: the media types listed in the response must be given in
     * our standard API format.
     */
    public function getInvoice(string $invoiceId): StreamInterface
    {
        return
            $this->request(
                'get',
                'invoices/{invoice-id}',
                [
                'invoice-id' => $invoiceId,
                ],
                [],
                null,
                [
                'application/vnd.retailer.v6+json',
                'application/vnd.retailer.v6+pdf',
                ],
                [
                'application/vnd.retailer.v6+json',
                'application/vnd.retailer.v6+pdf',
                ],
                [
                400 => Problem::class,
                ]
            )->getBody();
    }

    /**
     * Get an invoice specification by invoice id.
     *
     * Gets an invoice specification for an invoice with a paginated list of
     * its transactions. The available media types differ per invoice
     * specification and are listed within the response from the ‘GET all
     * invoices’ call. Note, the media types listed in the response must be
     * given in our standard API format.
     */
    public function getInvoiceSpecification(string $invoiceId, ?int $page = null): StreamInterface
    {
        return
            $this->request(
                'get',
                'invoices/{invoice-id}/specification',
                [
                'invoice-id' => $invoiceId,
                ],
                [
                'page' => $page,
                ],
                null,
                [
                'application/vnd.retailer.v6+json',
                'application/vnd.retailer.v6+pdf',
                'application/vnd.retailer.v6+openxmlformats-officedocument.spreadsheetml.sheet',
                ],
                [
                'application/vnd.retailer.v6+json',
                'application/vnd.retailer.v6+pdf',
                'application/vnd.retailer.v6+openxmlformats-officedocument.spreadsheetml.sheet',
                ],
                [
                400 => Problem::class,
                404 => Problem::class,
                ]
            )->getBody();
    }
}