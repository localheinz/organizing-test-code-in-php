<?php

declare(strict_types=1);

/**
 * Copyright (c) 2023-2025 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/organizing-test-code-in-php
 */

use Composer\InstalledVersions;
use Localheinz\OrganizingTestCodeInPhp;

$actual = require __DIR__ . '/vendor/composer/autoload_classmap.php';

$expected = [
    InstalledVersions::class => __DIR__ . '/vendor/composer/InstalledVersions.php',
    OrganizingTestCodeInPhp\Example::class => __DIR__ . '/src/Example.php',
    OrganizingTestCodeInPhp\ValueCanNotBeBlank::class => __DIR__ . '/src/ValueCanNotBeBlank.php',
    OrganizingTestCodeInPhp\ValueCanNotBeEmpty::class => __DIR__ . '/src/ValueCanNotBeEmpty.php',
];

$diff = \array_diff_assoc(
    $actual,
    $expected,
);

if ([] !== $diff) {
    echo 'Autoloader configures the following classes that are not intended for production use:' . \PHP_EOL . \PHP_EOL;

    foreach (\array_keys($diff) as $className) {
        echo \sprintf(
            '- %s' . \PHP_EOL,
            $className,
        );
    }

    echo \PHP_EOL;

    exit(1);
}

echo 'Autoloader configures only classes intended for production use!' . \PHP_EOL;

exit(0);
