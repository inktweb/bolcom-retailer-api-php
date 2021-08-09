<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Endpoints\V5;

use Inktweb\Bolcom\RetailerApi\Clients\V5\Client;
use Inktweb\Bolcom\RetailerApi\Development\Tests\Contracts\TestCaseWithClient;

abstract class BaseTest extends TestCaseWithClient
{
    public static function getClientName(): string
    {
        return Client::class;
    }
}
