# List open file descriptors for the current process cross platform

[![Build Status](https://travis-ci.com/WyriHaximus/php-file-descriptors.svg?branch=master)](https://travis-ci.com/WyriHaximus/php-file-descriptors)
[![Latest Stable Version](https://poser.pugx.org/WyriHaximus/file-descriptors/v/stable.png)](https://packagist.org/packages/WyriHaximus/file-descriptors)
[![Total Downloads](https://poser.pugx.org/WyriHaximus/file-descriptors/downloads.png)](https://packagist.org/packages/WyriHaximus/file-descriptors/stats)
[![Code Coverage](https://scrutinizer-ci.com/g/WyriHaximus/php-file-descriptors/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/WyriHaximus/php-file-descriptors/?branch=master)
[![License](https://poser.pugx.org/WyriHaximus/file-descriptors/license.png)](https://packagist.org/packages/WyriHaximus/file-descriptors)
[![PHP 7 ready](http://php7ready.timesplinter.ch/WyriHaximus/php-file-descriptors/badge.svg)](https://travis-ci.com/WyriHaximus/php-file-descriptors)


# Install

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```
composer require wyrihaximus/file-descriptors
```

# Usage

```php
use WyriHaximus\FileDescriptors\Factory;
use WyriHaximus\FileDescriptors\ListerInterface;

/** @var ListerInterface */
$lister = Factory::create();
$fileDescriptors = $lister->list(); // Returns an iterable containing a list of open file descriptors for the current process
```


# License

The MIT License (MIT)

Copyright (c) 2019 Cees-Jan Kiewiet

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
