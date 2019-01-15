<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use PHPUnit\Framework\TestCase;
use WyriHaximus\FileDescriptors\ProcSelfFd;

/**
 * @internal
 */
final class ProcSelfFdTest extends TestCase
{
    public function testList()
    {
        $psf = new ProcSelfFd();

        if ($psf->isSupported() === false) {
            $this->markTestSkipped('OS/env/set up not supported');
        }

        self::assertTrue(\count($psf->listFileDescriptors()) >= 3, 'Assuming to have at least 3 open file descriptors (STDIN, STDOUT, and STDERR)');
    }
}
