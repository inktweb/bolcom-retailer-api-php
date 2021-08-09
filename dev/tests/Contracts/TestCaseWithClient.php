<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Contracts;

use Inktweb\Bolcom\RetailerApi\Client\Config;
use Inktweb\Bolcom\RetailerApi\Contracts\Client;

abstract class TestCaseWithClient extends TestCaseWithEnvironment
{
    /** @var Client */
    protected static $client;

    protected const DEMO_MODE = true;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        static::$dotEnv->required(['CLIENT_ID', 'CLIENT_SECRET'])->notEmpty();

        $config = new Config(
            $_ENV['CLIENT_ID'],
            $_ENV['CLIENT_SECRET'],
            static::DEMO_MODE
        );
        static::$client = new (static::getClientName())(
            $config
        );
    }

    abstract public static function getClientName(): string;

    public function getClient(): Client
    {
        return static::$client;
    }
}
