<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

final class ProcSelfFd
{
    private const PATH = '/proc/self/fd';

    public static function list(): iterable
    {
        $fds = @\scandir(self::PATH, \SCANDIR_SORT_NONE);

        if ($fds === false) {
            throw new \Exception(\error_get_last()['mesage']);
        }

        foreach ($fds as $id) {
            if (!\in_array($id, ['.', '..'], true)) {
                yield $id;
            }
        }
    }
}
