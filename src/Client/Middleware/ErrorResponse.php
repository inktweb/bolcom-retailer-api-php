<?php

namespace Inktweb\Bolcom\RetailerApi\Client\Middleware;

use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ErrorResponse
{
    public function __invoke(callable $handler): callable
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            return $handler($request, $options)
                ->then(
                    function (ResponseInterface $response) use ($request) {
                        if ($response->getStatusCode() < 400) {
                            return $response;
                        }

                        throw new ApiException(
                            $response->getReasonPhrase(),
                            $request,
                            $response
                        );
                    }
                );
        };
    }
}
