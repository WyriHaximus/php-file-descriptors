<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

use Tivie\OS\Detector;

final class ProcSelfFd implements ListerInterface
{
    private const PATH = '/proc/self/fd';

    public function list(): iterable
    {
        yield from ScanDir::scan(self::PATH);
    }

    public function isSupported(): bool
    {
        return (new Detector())->isUnixLike() && \file_exists(self::PATH);
    }
}
