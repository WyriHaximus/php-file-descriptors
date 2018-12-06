<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use ApiClients\Tools\TestUtilities\TestCase;
use WyriHaximus\FileDescriptors\ProcSelfFd;
use function WyriHaximus\iteratorOrArrayToArray;

/**
 * @internal
 */
final class ProcSelfFdTest extends TestCase
{
    public function testList(): void
    {
        $psf = new ProcSelfFd();

        if ($psf->isSupported() === false) {
            $this->markTestSkipped('OS/env/set up not supported');
        }

        $fds = iteratorOrArrayToArray($psf->list());
        self::assertTrue(\count($fds) >= 3, 'Assuming to have at least 3 open file descriptors (STDIN, STDOUT, and STDERR)');
    }
}
