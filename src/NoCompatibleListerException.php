<?php

namespace WyriHaximus\FileDescriptors;

use Exception;

final class NoCompatibleListerException extends Exception
{
    public static function create()
    {
        return new self('No suitable lister found');
    }
}
