<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

use Tivie\OS\Detector;

final class DevFd implements ListerInterface
{
    private const PATH = '/dev/fd';

    public function list(): iterable
    {
        yield from ScanDir::scan(self::PATH);
    }

    public function isSupported(): bool
    {
        return (new Detector())->isOSX() && \file_exists(self::PATH);
    }
}
