<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

/**
 * @internal
 */
final class ScanDir
{
    public static function scan(string $path): iterable
    {
        $fds = @\scandir($path, \SCANDIR_SORT_NONE);

        if ($fds === false) {
            throw new \Exception('Unable to list file descriptors: ' . \print_r(\error_get_last(), true));
        }

        foreach ($fds as $id) {
            if (!\in_array($id, ['.', '..'], true)) {
                yield $id;
            }
        }
    }
}
