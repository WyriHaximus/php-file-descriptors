<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

final class Factory
{
    public static function create()
    {
        $lister = null;
        foreach ([
            'WyriHaximus\FileDescriptors\ProcSelfFd',
            'WyriHaximus\FileDescriptors\DevFd',
        ] as $listerClass) {
            /** @var ListerInterface $lister */
            $lister = new $listerClass();
            if ($lister->isSupported() === true) {
                return $lister;
            }
            unset($lister);
        }

        throw NoCompatibleListerException::create();
    }
}
