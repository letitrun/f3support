<?php

namespace Letitrun\F3Support\Exception;

use Throwable;
use Letitrun\F3Support\Http\JsonResponse;

class Handler
{
    public function handle(Throwable $e)
    {
        $code  = $e instanceof Exception ? $e->getPublicCode()  : Code::ERROR_UNKNOWN;
        $extra = $e instanceof Exception ? $e->getPublicExtra() : [];
        (new JsonResponse)->error(compact('code', 'extra'));
    }
}
