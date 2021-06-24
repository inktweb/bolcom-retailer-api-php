<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Utils;
use Inktweb\Bolcom\RetailerApi\Client\Config;
use Inktweb\Bolcom\RetailerApi\Client\Middleware\Authentication;
use Inktweb\Bolcom\RetailerApi\Client\Middleware\ErrorResponse;
use Inktweb\Bolcom\RetailerApi\Client\Middleware\JsonResponse;

abstract class Client extends GuzzleHttpClient
{
    public function __construct(Config $config)
    {
        parent::__construct(
            [
                'handler' => $this->createHandler($config),
                'base_uri' => $config->getApiBaseUri(),
                'auth' => 'oauth',
                'headers' => [
                    'User-Agent' => $config->getUserAgent(),
                ],
            ]
        );
    }

    protected function createHandler(Config $config): HandlerStack
    {
        $stack = new HandlerStack(Utils::chooseHandler());

        $stack->push(Middleware::redirect(), 'allow_redirects');
        $stack->push(Middleware::cookies(), 'cookies');
        $stack->push(Middleware::prepareBody(), 'prepare_body');

        $stack->push(
            new Authentication(
                $config->getClientId(),
                $config->getClientSecret(),
                $config->getCache()
            ),
            'oauth'
        );
        $stack->push(new ErrorResponse(), 'http_errors');

        if ($config->hasLogger()) {
            $stack->push(Middleware::log($config->getLogger(), new MessageFormatter()));
        }

        $stack->push(new JsonResponse());

        return $stack;
    }
}
