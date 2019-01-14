<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

final class Factory
{
    private const LISTERS = [
        ProcSelfFd::class,
        DevFd::class,
    ];

    public static function create(): ListerInterface
    {
        $lister = null;
        foreach (self::LISTERS as $listerClass) {
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
