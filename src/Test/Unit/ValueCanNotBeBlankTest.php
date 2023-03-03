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

use Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeBlank;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeBlank
 */
final class ValueCanNotBeBlankTest extends Framework\TestCase
{
    public function testCreateReturnsException(): void
    {
        $exception = ValueCanNotBeBlank::create();

        self::assertSame('Value can not be blank.', $exception->getMessage());
    }
}
