<?php

namespace Inktweb\Bolcom\RetailerApi\Client\Middleware;

use GuzzleHttp\Client;
use kamermans\OAuth2\GrantType\ClientCredentials;
use kamermans\OAuth2\OAuth2Middleware;
use kamermans\OAuth2\Persistence\SimpleCacheTokenPersistence;
use Psr\SimpleCache\CacheInterface;

class Authentication
{
    /** @var OAuth2Middleware */
    protected $middleware;

    public function __construct(string $clientId, string $clientSecret, CacheInterface $cache)
    {
        $this->middleware = new OAuth2Middleware(
            new ClientCredentials(
                new Client(['base_uri' => 'https://login.bol.com/token']),
                [
                    'client_id' => $clientId,
                    'client_secret' => $clientSecret,
                ]
            )
        );

        $this->middleware->setTokenPersistence(new SimpleCacheTokenPersistence($cache));
    }

    public function __invoke(callable $handler)
    {
        return $this->middleware->__invoke($handler);
    }
}
