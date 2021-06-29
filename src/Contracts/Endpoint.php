<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use GuzzleHttp\RequestOptions;
use Inktweb\Bolcom\RetailerApi\Client\JsonResponse;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;

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
        array $requestContentTypes,
        ?array $responseContentTypes,
        array $errorResponseModels
    ): array {
        try {
            $response = $this->client->request(
                $method,
                $this->compilePath($uri, $pathParameters),
                [
                    RequestOptions::QUERY => $queryParameters,
                    RequestOptions::BODY => json_encode($body),
                    RequestOptions::HEADERS => [
                        'Accept' => $requestContentTypes,
                    ],
                ]
            );
        } catch (ApiException $e) {
            if ($e->hasResponse()) {
                $statusCode = $e->getResponse()->getStatusCode();
                /** @var JsonResponse $body */
                $body = $e->getResponse()->getBody();

                $errorResponseModel = $errorResponseModels[$statusCode] ?? null;
                if ($errorResponseModel !== null) {
                    $e->setModel($errorResponseModel::fromArray($body->getJson()));
                }
            }

            throw $e;
        }

        [$contentType] = $response->getHeader('Content-Type');
        [$contentType] = explode(';', $contentType);
        $contentType = trim($contentType);

        if ($responseContentTypes !== null && !in_array($contentType, $responseContentTypes)) {
            throw new UnexpectedResponseContentTypeException();
        }

        /** @var JsonResponse $body */
        $body = $response->getBody();
        return $body->getJson();
    }

    protected function compilePath(string $uri, array $pathParameters): string
    {
        foreach ($pathParameters as $key => $value) {
            $uri = str_replace("{{$key}}", urlencode($value), $uri);
        }

        return $uri;
    }
}
