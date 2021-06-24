<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use GuzzleHttp\RequestOptions;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;

abstract class Endpoint
{
    /** @var Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function request(
        string $method,
        string $uri,
        array $pathParameters,
        array $queryParameters,
        ?Model $body,
        ?string $requestContentType,
        string $responseContentType,
        array $errorResponseModels
    ): array {
        try {
            $this->client->request(
                $method,
                $this->compilePath($uri, $pathParameters),
                [
                    RequestOptions::QUERY => $queryParameters,
                    RequestOptions::BODY => json_encode($body),
                    RequestOptions::HEADERS => [
                        'Content-Type' => $requestContentType,
                    ],
                ]
            );
        } catch (ApiException $e) {
            // todo, process according to error response models
        }
        return [];
    }

    protected function compilePath(string $uri, array $pathParameters): string
    {
        foreach ($pathParameters as $key => $value) {
            $uri = str_replace("{{$key}}", urlencode($value), $uri);
        }

        return $uri;
    }
}
