<?php

namespace WyriHaximus\FileDescriptors;

use Tivie\OS\Detector;

final class ProcSelfFd implements ListerInterface
{
    const PATH = '/proc/self/fd';

    public function listFileDescriptors()
    {
        return ScanDir::scan(self::PATH);
    }

    public function isSupported()
    {
        return (new Detector())->isUnixLike() && \file_exists(self::PATH);
    }
}
