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

namespace Localheinz\OrganizingTestCodeInPhp\Test;

use Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeEmpty;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\OrganizingTestCodeInPhp\ValueCanNotBeEmpty
 */
final class ValueCanNotBeEmptyTest extends Framework\TestCase
{
    public function testCreateReturnsException(): void
    {
        $exception = ValueCanNotBeEmpty::create();

        self::assertSame('Value can not be empty.', $exception->getMessage());
    }
}
