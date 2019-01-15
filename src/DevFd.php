<?php

namespace WyriHaximus\FileDescriptors;

use Tivie\OS\Detector;

final class DevFd implements ListerInterface
{
    const PATH = '/dev/fd';

    public function listFileDescriptors()
    {
        return ScanDir::scan(self::PATH);
    }

    public function isSupported()
    {
        return (new Detector())->isOSX() && \file_exists(self::PATH);
    }
}
