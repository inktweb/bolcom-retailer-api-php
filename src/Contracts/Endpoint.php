<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Inktweb\Bolcom\RetailerApi\Client\JsonResponse;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Psr\Http\Message\ResponseInterface;

abstract class Endpoint
{
    protected Client $client;

    /**
     * @throws ApiException
     * @throws GuzzleException
     * @throws UnexpectedResponseContentTypeException
     * @throws UnknownCollectionFormatException
     */
    protected function request(
        string $method,
        string $uri,
        array $pathParameters,
        array $queryParameters,
        ?Model $body,
        ?array $acceptedContentTypes,
        ?array $responseContentTypes,
        array $errorResponseModels,
        ?array $headerParameters = null,
        ?array $multipartFormParameters = null
    ): ResponseInterface {
        try {
            $response = $this->client->request(
                $method,
                $this->compileUri($uri, $pathParameters, $queryParameters),
                [
                    RequestOptions::BODY => $body === null
                        ? null
                        : json_encode($body),
                    RequestOptions::HEADERS => array_merge(
                        array_map(
                            fn($parameter) => (string)$parameter,
                            array_filter($headerParameters ?? [])
                        ),
                        [
                            'Accept' => $acceptedContentTypes ?: '*/*',
                        ]
                    ),
                    RequestOptions::MULTIPART => $multipartFormParameters ?? null,
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
            throw (new UnexpectedResponseContentTypeException("Unexpected response content type: '{$contentType}'"))
                ->setResponse($response);
        }

        return $response;
    }

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @throws UnknownCollectionFormatException
     */
    protected function compileUri(string $uri, array $pathParameters, array $queryParameters): string
    {
        return $this->compilePath($uri, $pathParameters) . $this->compileQuery($queryParameters);
    }

    protected function compilePath(string $uri, array $pathParameters): string
    {
        foreach ($pathParameters as $key => $value) {
            $uri = str_replace("{{$key}}", urlencode($value), $uri);
        }

        return $uri;
    }

    /**
     * @throws UnknownCollectionFormatException
     */
    protected function compileQuery(array $queryParameters): string
    {
        if (empty($queryParameters)) {
            return '';
        }

        $parameters = [];

        foreach ($queryParameters as $name => $value) {
            if ($value === null) {
                continue;
            }

            if ($value instanceof Enum) {
                $encodedName = urlencode($name);

                foreach ($value->compile() as $item) {
                    $parameters[] = $encodedName . '=' . urlencode($item);
                }

                continue;
            }

            if (is_array($value)) {
                $encodedName = urlencode("{$name}[]");

                foreach ($value as $item) {
                    $parameters[] = $encodedName . '=' . urlencode($item);
                }

                continue;
            }

            $parameters[] = urlencode($name) . '=' . urlencode($value);
        }

        return '?' . implode('&', $parameters);
    }
}
