<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use WyriHaximus\FileDescriptors\ProcSelfFd;
use WyriHaximus\TestUtilities\TestCase;

use function count;
use function WyriHaximus\iteratorOrArrayToArray;

final class ProcSelfFdTest extends TestCase
{
    public function testList(): void
    {
        $psf = new ProcSelfFd();

        if ($psf->isSupported() === false) {
            self::markTestSkipped('OS/env/set up not supported');
        }

        $fds = iteratorOrArrayToArray($psf->list());
        self::assertGreaterThanOrEqual(3, count($fds), 'Assuming to have at least 3 open file descriptors (STDIN, STDOUT, and STDERR)');
    }
}
