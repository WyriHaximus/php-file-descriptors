<?php declare(strict_types=1);

namespace WyriHaximus\FileDescriptors;

final class LastResort implements ListerInterface
{
    public function list(): iterable
    {
        $fd = \fopen('php://memory', 'r');
        $fdi = (int)$fd;
        \fclose($fd);

        for ($i = 0; $i <= $fdi; $i++) {
            try {
                \fclose(\fopen('php://fd/' . $i, 'r'));
            } catch (\Throwable $throwable) {
                continue;
            }

            yield $i;
        }
    }

    public function isSupported(): bool
    {
        return true;
    }
}
