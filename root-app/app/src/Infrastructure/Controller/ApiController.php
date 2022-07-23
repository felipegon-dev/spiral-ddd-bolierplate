<?php

/**
 * This file is part of Spiral package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Infrastructure\Controller;

use App\Infrastructure\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Spiral\Prototype\Traits\PrototypeTrait;

class ApiController
{
    use PrototypeTrait;

    public function index(): ResponseInterface
    {
        return JsonResponse::get('Hello world!', 200);
    }
}
