<?php

namespace Letitrun\F3Support\Exception;

use Throwable;

class Handler
{
    public function handle(Throwable $e = null)
    {
        $code = $e instanceof Exception ? $e->publicCode()  : Code::ERROR_UNKNOWN;
        $extra = $e instanceof Exception ? $e->publicExtra() : [];

        resp_error(compact('code', 'extra'));
    }
}
