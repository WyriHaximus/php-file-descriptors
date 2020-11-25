<?php

declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

use function in_array;
use function Safe\scandir;

use const SCANDIR_SORT_NONE;

/**
 * @internal
 */
final class ScanDir
{
    /**
     * @return iterable<string>
     */
    public static function scan(string $path): iterable
    {
        $fds = scandir($path, SCANDIR_SORT_NONE);

        foreach ($fds as $id) {
            if (in_array($id, ['.', '..'], true)) {
                continue;
            }

            yield $id;
        }
    }
}
