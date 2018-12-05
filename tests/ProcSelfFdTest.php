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
        $fds = iteratorOrArrayToArray(ProcSelfFd::list());
        self::assertCount(9, $fds);
    }
}
