<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V8;

use Inktweb\Bolcom\RetailerApi\Clients\V8\Client;
use Inktweb\Bolcom\RetailerApi\Development\Tests\Contracts\TestCaseWithClient;

/**
 * @method Client getClient()
 */
abstract class BaseTest extends TestCaseWithClient
{
    public static function getClientName(): string
    {
        return Client::class;
    }
}
