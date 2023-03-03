<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Contracts;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

abstract class TestCaseWithEnvironment extends TestCase
{
    protected static Dotenv $dotEnv;

    public static function setUpBeforeClass(): void
    {
        static::$dotEnv = Dotenv::createImmutable(__DIR__ . '/../../..');
        static::$dotEnv->load();
    }
}
