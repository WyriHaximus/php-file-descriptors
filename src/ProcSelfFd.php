<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

final class ProcSelfFd
{
    private const PATH = '/proc/self/fd';

    public static function list(): iterable
    {
        yield from ScanDir::scan(self::PATH);
    }
}
