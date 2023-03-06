<?php

namespace Inktweb\Bolcom\RetailerApi\Client;

use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

class Config
{
    public const API_BASE_URI = 'https://api.bol.com';
    public const API_DEMO_PATH = '/retailer-demo';
    public const API_PATH = '/retailer';

    protected string $clientId;
    protected string $clientSecret;
    protected bool $demoMode = true;
    protected CacheInterface $cache;
    protected ?LoggerInterface $logger;
    protected string $userAgent = 'inktweb-bolcom-retailer-api';

    public function __construct(string $clientId, string $clientSecret, bool $demoMode = true)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;

        $this->setDemoMode($demoMode);

        $this->setCache(
            new Psr16Cache(
                new FilesystemAdapter(
                    sha1($clientId . $clientSecret)
                )
            )
        );
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function isDemoMode(): bool
    {
        return $this->demoMode;
    }

    public function setDemoMode(bool $demoMode): self
    {
        $this->demoMode = $demoMode;
        return $this;
    }

    public function getApiBaseUri(): string
    {
        return $this->isDemoMode()
            ? static::API_BASE_URI . static::API_DEMO_PATH . '/'
            : static::API_BASE_URI . static::API_PATH . '/';
    }

    public function getCache(): CacheInterface
    {
        return $this->cache;
    }

    public function setCache(CacheInterface $cache): self
    {
        $this->cache = $cache;
        return $this;
    }

    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }

    public function hasLogger(): bool
    {
        return $this->logger !== null;
    }

    public function setLogger(?LoggerInterface $logger): self
    {
        $this->logger = $logger;
        return $this;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): self
    {
        $this->userAgent = $userAgent;
        return $this;
    }
}
