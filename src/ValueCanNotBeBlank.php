<?php

declare(strict_types=1);

/**
 * Copyright (c) 2023 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/organizing-test-code
 */

namespace Localheinz\OrganizingTestCode;

final class ValueCanNotBeBlank extends \InvalidArgumentException
{
    public static function create(): self
    {
        return new self('Value can not be blank.');
    }
}
