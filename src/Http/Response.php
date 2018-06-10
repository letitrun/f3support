<?php

namespace Letitrun\F3Support\Http;

/**
 * Api's json response class
 */
class Response
{
    public function ok($v, int $code = 200)
    {
        $this->json($code, ['success' => true, 'response' => $v]);
    }

    public function error($v, int $code = 400)
    {
        $this->json($code, ['success' => false, 'response' => $v]);
    }

    public function json(int $code, $v, array $headers = [])
    {
        $headers['Content-type'] = 'application/json';
        foreach ($headers as $hk => $hv) {
            header("$hk:$hv");
        }
        http_response_code($code);
        echo json_encode($v);
    }
}
