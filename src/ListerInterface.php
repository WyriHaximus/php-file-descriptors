<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

interface ListerInterface
{
    public static function list(): iterable;
}
