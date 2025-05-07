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

use Faker\Factory;
use Faker\Generator;

/**
 * @internal
 */
trait Helper
{
    private static function faker(string $locale = 'en_US'): Generator
    {
        /**
         * @var array<string, Generator>
         */
        static $fakers = [];

        if (!\array_key_exists($locale, $fakers)) {
            $faker = Factory::create($locale);

            $faker->seed(9001);

            $fakers[$locale] = $faker;
        }

        return $fakers[$locale];
    }
}
