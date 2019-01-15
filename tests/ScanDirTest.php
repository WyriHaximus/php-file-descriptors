<?php

namespace WyriHaximus\Tests\FileDescriptors;

use PHPUnit\Framework\TestCase;
use WyriHaximus\FileDescriptors\ScanDir;

/**
 * @internal
 */
final class ScanDirTest extends TestCase
{
    public function testScan()
    {
        $fds = ScanDir::scan(__DIR__);
        self::assertCount(4, $fds);
        \sort($fds);
        self::assertSame([
            'DevFdTest.php',
            'FactoryTest.php',
            'ProcSelfFdTest.php',
            'ScanDirTest.php',
        ], $fds);
    }
}
