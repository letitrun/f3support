<?php

namespace Letitrun\F3Support\Http;

class HealthController extends Controller
{
    public function getStatus()
    {
        (new JsonResponse)->ok('Hello, World!');
    }
}
