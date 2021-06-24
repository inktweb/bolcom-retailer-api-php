<?php

namespace Inktweb\Bolcom\RetailerApi\Client\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Inktweb\Bolcom\RetailerApi\Client\JsonResponse as Json;

class JsonResponse
{
    public function __invoke(callable $handler): callable
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            return $handler($request, $options)
                ->then(
                    function (ResponseInterface $response) {
                        return $response->withBody(new Json($response->getBody()));
                    }
                );
        };
    }
}
