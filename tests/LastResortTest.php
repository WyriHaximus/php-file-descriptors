<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use ApiClients\Tools\TestUtilities\TestCase;
use WyriHaximus\FileDescriptors\LastResort;
use function WyriHaximus\iteratorOrArrayToArray;

/**
 * @internal
 */
final class LastResortTest extends TestCase
{
    public function testList(): void
    {
        $lastResort = new LastResort();
        $fds = iteratorOrArrayToArray($lastResort->list());
        self::assertTrue(\count($fds) >= 3, 'Assuming to have at least 3 open file descriptors (STDIN, STDOUT, and STDERR)');
    }
}
