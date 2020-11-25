<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use WyriHaximus\FileDescriptors\DevFd;
use WyriHaximus\TestUtilities\TestCase;

use function count;
use function WyriHaximus\iteratorOrArrayToArray;

/**
 * @internal
 */
final class DevFdTest extends TestCase
{
    public function testList(): void
    {
        $psf = new DevFd();

        if ($psf->isSupported() === false) {
            self::markTestSkipped('OS/env/set up not supported');
        }

        $fds = iteratorOrArrayToArray($psf->list());
        self::assertGreaterThanOrEqual(3, count($fds), 'Assuming to have at least 3 open file descriptors (STDIN, STDOUT, and STDERR)');
    }
}
