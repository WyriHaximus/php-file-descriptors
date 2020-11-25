<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use WyriHaximus\FileDescriptors\ScanDir;
use WyriHaximus\TestUtilities\TestCase;

use function Safe\sort;
use function WyriHaximus\iteratorOrArrayToArray;

final class ScanDirTest extends TestCase
{
    public function testScan(): void
    {
        $fds = iteratorOrArrayToArray(ScanDir::scan(__DIR__));
        self::assertCount(5, $fds);
        sort($fds);
        self::assertSame([
            'DevFdTest.php',
            'FactoryTest.php',
            'NoCompatibleListerExceptionTest.php',
            'ProcSelfFdTest.php',
            'ScanDirTest.php',
        ], $fds);
    }
}
