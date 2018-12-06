<?php declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use ApiClients\Tools\TestUtilities\TestCase;
use WyriHaximus\FileDescriptors\Factory;
use WyriHaximus\FileDescriptors\ListerInterface;

/**
 * @internal
 */
final class FactoryTest extends TestCase
{
    public function testCreate(): void
    {
        self::assertInstanceOf(ListerInterface::class, Factory::create());
    }
}
