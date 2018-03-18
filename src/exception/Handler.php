<?php

namespace Letitrun\F3Support\Exception;

use Throwable;
use Letitrun\F3Support\Http\JsonResponse;

/**
 * F3 application exception handler.
 */
class Handler
{
    /**
     * Handles exceptions & renders json api response.
     * @param Throwable $e
     */
    public function handle(Throwable $e)
    {
        $code  = $e instanceof Exception ? $e->publicCode() : Code::ERROR_UNKNOWN;
        $extra = $e instanceof Exception ? $e->publicExtra() : [];

        (new JsonResponse)->error(compact('code', 'extra'));
    }
}
