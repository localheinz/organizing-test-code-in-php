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

namespace Localheinz\OrganizingTestCodeInPhp\Test\Performance;

use Localheinz\OrganizingTestCodeInPhp\Example;

final class ExampleBench
{
    /**
     * @Revs(1000)
     *
     * @Iterations(5)
     */
    public function benchFromStringReturnsExample(): void
    {
        Example::fromString('foo');
    }
}
