<?php
/**
 * @author Felipe Gonzalez Lopez <felipe.lopez@gear4music.com>
 * @copyright (c) 2022 Gear4music Ltd
 */

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/app/src',
        __DIR__ . '/tests',
    ]);

    $rectorConfig->importNames();
    $rectorConfig->phpVersion(PhpVersion::PHP_81);
    $rectorConfig->import(LevelSetList::UP_TO_PHP_81);
};
