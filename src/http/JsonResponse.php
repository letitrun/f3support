<?php

namespace Letitrun\F3Support\Http;

class JsonResponse extends Response
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
        $this->send($code, json_encode($v), $headers);
    }
}
