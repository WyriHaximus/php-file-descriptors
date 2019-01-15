<?php

namespace WyriHaximus\FileDescriptors;

/**
 * @internal
 */
final class ScanDir
{
    public static function scan($path)
    {
        $fds = @\scandir($path, \SCANDIR_SORT_NONE);

        if ($fds === false) {
            throw new \Exception('Unable to list file descriptors: ' . \print_r(\error_get_last(), true));
        }

        $ids = [];
        foreach ($fds as $id) {
            if (!\in_array($id, ['.', '..'], true)) {
                $ids[] = $id;
            }
        }

        return $ids;
    }
}
