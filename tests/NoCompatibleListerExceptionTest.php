<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\FileDescriptors;

use WyriHaximus\FileDescriptors\NoCompatibleListerException;
use WyriHaximus\TestUtilities\TestCase;

final class NoCompatibleListerExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function create(): void
    {
        self::assertNotSame(NoCompatibleListerException::create(), NoCompatibleListerException::create());
    }
}
