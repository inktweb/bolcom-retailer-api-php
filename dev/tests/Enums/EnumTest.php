<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Enums;

use Inktweb\Bolcom\RetailerApi\Contracts\Enum;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Contracts\Enum
 */
class EnumTest extends TestCase
{
    /**
     * @covers ::isEmpty
     */
    public function testIsEmpty(): void
    {
        $enum = new class extends Enum {
            public const NOT_EMPTY = 'not empty';

            protected array $allowedValues = [self::NOT_EMPTY];
        };

        $this->assertTrue($enum->isEmpty());

        $enum->set($enum::NOT_EMPTY);

        $this->assertFalse($enum->isEmpty());

        $enum->set();

        $this->assertTrue($enum->isEmpty());
    }

    /**
     * @covers ::is
     */
    public function testIs(): void
    {
        $enum = new class extends Enum {
            public const SOMETHING = 'something';
            public const OTHER = 'other';

            protected array $allowedValues = [self::SOMETHING, self::OTHER];
        };

        $this->assertFalse($enum->is($enum::SOMETHING));
        $this->assertFalse($enum->is($enum::OTHER));

        $enum->set($enum::SOMETHING);

        $this->assertTrue($enum->is($enum::SOMETHING));
        $this->assertFalse($enum->is($enum::OTHER));

        $enum->set($enum::OTHER);

        $this->assertFalse($enum->is($enum::SOMETHING));
        $this->assertTrue($enum->is($enum::OTHER));

        $enum->set($enum::SOMETHING, $enum::OTHER);

        $this->assertFalse($enum->is($enum::SOMETHING));
        $this->assertFalse($enum->is($enum::OTHER));
    }

    /**
     * @covers ::contains
     */
    public function testContains(): void
    {
        $enum = new class extends Enum {
            public const SOMETHING = 'something';
            public const OTHER = 'other';

            protected array $allowedValues = [self::SOMETHING, self::OTHER];
        };

        $this->assertFalse($enum->contains($enum::SOMETHING));
        $this->assertFalse($enum->contains($enum::OTHER));

        $enum->set($enum::SOMETHING);

        $this->assertTrue($enum->contains($enum::SOMETHING));
        $this->assertFalse($enum->contains($enum::OTHER));

        $enum->set($enum::OTHER);

        $this->assertFalse($enum->contains($enum::SOMETHING));
        $this->assertTrue($enum->contains($enum::OTHER));

        $enum->set($enum::SOMETHING, $enum::OTHER);

        $this->assertTrue($enum->contains($enum::SOMETHING));
        $this->assertTrue($enum->contains($enum::OTHER));
    }

    /**
     * @covers ::has
     */
    public function testHas(): void
    {
        $enum = new class extends Enum {
            public const SOMETHING = 'something';
            public const OTHER = 'other';
            public const THIRD_LEG = 'third leg';

            protected array $allowedValues = [self::SOMETHING, self::OTHER, self::THIRD_LEG];
        };

        $this->assertTrue($enum->has());
        $this->assertFalse($enum->has($enum::SOMETHING));
        $this->assertFalse($enum->has($enum::OTHER));

        $enum->set($enum::SOMETHING);

        $this->assertTrue($enum->has($enum::SOMETHING));
        $this->assertFalse($enum->has($enum::OTHER));

        $enum->set($enum::OTHER);

        $this->assertFalse($enum->has($enum::SOMETHING));
        $this->assertTrue($enum->has($enum::OTHER));

        $enum->set($enum::SOMETHING, $enum::OTHER);

        $this->assertFalse($enum->has($enum::SOMETHING));
        $this->assertFalse($enum->has($enum::OTHER));
        $this->assertTrue($enum->has($enum::SOMETHING, $enum::OTHER));
        $this->assertFalse($enum->has($enum::SOMETHING, $enum::THIRD_LEG));
        $this->assertFalse($enum->has($enum::SOMETHING, $enum::OTHER, $enum::THIRD_LEG));

        $enum->set($enum::SOMETHING, $enum::OTHER, $enum::THIRD_LEG);

        $this->assertFalse($enum->has($enum::SOMETHING));
        $this->assertFalse($enum->has($enum::OTHER));
        $this->assertFalse($enum->has($enum::SOMETHING, $enum::OTHER));
        $this->assertFalse($enum->has($enum::SOMETHING, $enum::THIRD_LEG));
        $this->assertTrue($enum->has($enum::SOMETHING, $enum::OTHER, $enum::THIRD_LEG));
    }
}
