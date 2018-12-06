<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

interface ListerInterface
{
    /**
     * Return an iterable containing a list of open file descriptors for the current process.
     */
    public function list(): iterable;

    /**
     * Return false when the current OS/env/set up isn't supported, return true when it is.
     */
    public function isSupported(): bool;
}
