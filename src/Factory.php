<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

final class Factory
{
    private const LISTERS = [
        ProcSelfFd::class,
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

        throw new \Exception('No suitable lister found');
    }
}
