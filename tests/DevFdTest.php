<?php

namespace WyriHaximus\Tests\FileDescriptors;

use PHPUnit\Framework\TestCase;
use WyriHaximus\FileDescriptors\DevFd;

/**
 * @internal
 */
final class DevFdTest extends TestCase
{
    public function testList()
    {
        $psf = new DevFd();

        if ($psf->isSupported() === false) {
            $this->markTestSkipped('OS/env/set up not supported');
        }

        self::assertTrue(\count($psf->listFileDescriptors()) >= 3, 'Assuming to have at least 3 open file descriptors (STDIN, STDOUT, and STDERR)');
    }
}
