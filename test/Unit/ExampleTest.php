<?php

declare(strict_types=1);

/**
 * Copyright (c) 2023-2024 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/organizing-test-code-in-php
 */

namespace Localheinz\OrganizingTestCodeInPhp\Test\Unit;

use Localheinz\OrganizingTestCodeInPhp\Example;
use Localheinz\OrganizingTestCodeInPhp\Test;
use Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeBlank;
use Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeEmpty;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\OrganizingTestCodeInPhp\Example
 *
 * @uses \Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeBlank
 * @uses \Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeEmpty
 */
final class ExampleTest extends Framework\TestCase
{
    use Test\Util\Helper;

    /**
     * @dataProvider \Ergebnis\DataProvider\StringProvider::empty
     */
    public function testFromStringRejectsEmptyValue(string $value): void
    {
        $this->expectException(ValueCanNotBeEmpty::class);

        Example::fromString($value);
    }

    /**
     * @dataProvider \Ergebnis\DataProvider\StringProvider::blank
     */
    public function testFromStringRejectsBlankValue(string $value): void
    {
        $this->expectException(ValueCanNotBeBlank::class);

        Example::fromString($value);
    }

    public function testFromStringReturnsExample(): void
    {
        $value = self::faker()->word();

        $example = Example::fromString($value);

        self::assertSame($value, $example->toString());
    }

    public function testEqualsReturnsFalseWhenValueIsDifferent(): void
    {
        $faker = self::faker()->unique();

        $one = Example::fromString($faker->word());
        $two = Example::fromString($faker->word());

        self::assertFalse($one->equals($two));
    }

    public function testEqualsReturnsTrueWhenValueIsSame(): void
    {
        $value = self::faker()->word();

        $one = Example::fromString($value);
        $two = Example::fromString($value);

        self::assertTrue($one->equals($two));
    }
}
