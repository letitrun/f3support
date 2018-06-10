<?php

namespace Letitrun\F3Support\Http;

class HealthController extends Controller
{
    public function status()
    {
        resp_ok('Hello, World!');
    }
}
