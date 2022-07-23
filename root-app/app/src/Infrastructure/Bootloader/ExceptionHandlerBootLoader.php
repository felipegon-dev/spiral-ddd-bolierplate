<?php

declare(strict_types=1);

namespace App\Infrastructure\Bootloader;

use App\Infrastructure\Exception\ExceptionHandler;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\Http\ErrorHandlerBootloader;
use Spiral\Http\ErrorHandler\RendererInterface;

class ExceptionHandlerBootLoader extends Bootloader
{
    final public const DEPENDENCIES = [
        ErrorHandlerBootloader::class
    ];

    final public const SINGLETONS = [
        RendererInterface::class => ExceptionHandler::class
    ];
}
