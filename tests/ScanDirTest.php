<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use ApiClients\Tools\TestUtilities\TestCase;
use WyriHaximus\FileDescriptors\ScanDir;
use function WyriHaximus\iteratorOrArrayToArray;

/**
 * @internal
 */
final class ScanDirTest extends TestCase
{
    public function testScan(): void
    {
        $fds = iteratorOrArrayToArray(ScanDir::scan(__DIR__));
        self::assertCount(3, $fds);
        \sort($fds);
        self::assertSame([
            'FactoryTest.php',
            'ProcSelfFdTest.php',
            'ScanDirTest.php',
        ], $fds);
    }
}