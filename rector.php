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

use Rector\Config;
use Rector\Core;

return static function (Config\RectorConfig $rectorConfig): void {
    $rectorConfig->cacheDirectory(__DIR__ . '/.build/rector/');

    $rectorConfig->import(__DIR__ . '/vendor/fakerphp/faker/rector-migrate.php');

    $rectorConfig->paths([
        __DIR__ . '/src/',
    ]);

    $rectorConfig->phpVersion(Core\ValueObject\PhpVersion::PHP_83);
};
