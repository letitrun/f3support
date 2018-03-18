<?php

namespace Letitrun\F3Support\Http;

/**
 * Example controller with health status endpoint.
 */
class HealthController extends Controller
{
    /**
     * Gets health status.
     */
    public function getStatus()
    {
        (new JsonResponse)->ok('Hello, World!');
    }
}
