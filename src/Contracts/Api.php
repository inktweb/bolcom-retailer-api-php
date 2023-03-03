<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

abstract class Api
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
