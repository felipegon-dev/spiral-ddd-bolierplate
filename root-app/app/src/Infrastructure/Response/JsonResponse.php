<?php

namespace App\Infrastructure\Response;

use Psr\Http\Message\ResponseInterface;
use Spiral\Prototype\Traits\PrototypeTrait;

class JsonResponse
{
    use PrototypeTrait;

    public static function get(mixed $message, int $code): ResponseInterface
    {
        return (new self())->response($message, $code);
    }

    protected function response(mixed $message, int $code): ResponseInterface
    {
        return $this->response->json($message, $code);
    }
}
