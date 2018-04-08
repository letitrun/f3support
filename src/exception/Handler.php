<?php

namespace Letitrun\F3Support\Exception;

use Throwable;

class Handler
{
    public function handle(Throwable $e)
    {
        $code  = $e instanceof Exception ? $e->getPublicCode()  : Code::ERROR_UNKNOWN;
        $extra = $e instanceof Exception ? $e->getPublicExtra() : [];

        jsonError(compact('code', 'extra'));
    }
}
