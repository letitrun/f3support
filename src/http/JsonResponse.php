<?php

namespace Letitrun\F3Support\Http;

/**
 * Json response
 */
class JsonResponse extends Response
{
    /**
     * Success response.
     * @param  mixed $v
     * @param  int   $code
     */
    public function ok($v, int $code = 200)
    {
        $this->json($code, ['success' => true, 'response' => $v]);
    }

    /**
     * Error response.
     * @param  mixed $v
     * @param  int   $code
     */
    public function error($v, int $code = 400)
    {
        $this->json($code, ['success' => false, 'response' => $v]);
    }

    /**
     * Json response.
     * @param  int   $code
     * @param  mixed $v
     * @param  array $headers
     */
    public function json(int $code, $v, array $headers = [])
    {
        // Adds one specific header value
        $headers['Content-type'] = 'application/json';

        $this->send($code, json_encode($v), $headers);
    }
}
