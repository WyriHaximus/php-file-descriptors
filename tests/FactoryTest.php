<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use ApiClients\Tools\TestUtilities\TestCase;
use WyriHaximus\FileDescriptors\Factory;
use WyriHaximus\FileDescriptors\ListerInterface;
use WyriHaximus\FileDescriptors\NoCompatibleListerException;

/**
 * @internal
 */
final class FactoryTest extends TestCase
{
    public function testCreate(): void
    {
        if (\DIRECTORY_SEPARATOR === '\\') {
            self::expectException(NoCompatibleListerException::class);
            self::expectExceptionMessage('No suitable lister found');
        }

        self::assertInstanceOf(ListerInterface::class, Factory::create());
    }
}
