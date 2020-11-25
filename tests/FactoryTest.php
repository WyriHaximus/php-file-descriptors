<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use WyriHaximus\FileDescriptors\Factory;
use WyriHaximus\FileDescriptors\NoCompatibleListerException;
use WyriHaximus\TestUtilities\TestCase;

use const DIRECTORY_SEPARATOR;

/**
 * @internal
 */
final class FactoryTest extends TestCase
{
    public function testCreate(): void
    {
        if (DIRECTORY_SEPARATOR === '\\') {
            self::expectException(NoCompatibleListerException::class);
            self::expectExceptionMessage('No suitable lister found');
        }

        self::assertNotSame(Factory::create(), Factory::create());
    }
}
