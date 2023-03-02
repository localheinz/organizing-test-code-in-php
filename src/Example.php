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

final class Example
{
    private function __construct(private readonly string $value)
    {
    }

    /**
     * @throws ValueCanNotBeBlank
     * @throws ValueCanNotBeEmpty
     */
    public static function fromString(string $value): self
    {
        if ('' === $value) {
            throw ValueCanNotBeEmpty::create();
        }

        if ('' === \trim($value)) {
            throw ValueCanNotBeBlank::create();
        }

        return new self($value);
    }

    public function toString(): string
    {
        return $this->value;
    }

    public function equals(self $other): bool
    {
        return $this->value === $other->value;
    }
}
