<?php

/**
 * This file is part of Spiral package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Infrastructure\Bootloader;

use App\Infrastructure\Controller\ApiController;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Router\Route;
use Spiral\Router\RouterInterface;
use Spiral\Router\Target\Controller;

class RoutesBootloader extends Bootloader
{
    /**
     * Bootloader execute method.
     */
    public function boot(RouterInterface $router): void
    {
        $router->setRoute(
            'api',
            (new Route('/', new Controller(ApiController::class)))
                ->withDefaults(['action' => 'index'])
        );
    }
}
