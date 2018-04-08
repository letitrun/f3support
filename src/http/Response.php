<?php

namespace Letitrun\F3Support\Http;

class Response
{
    public function jsonOk($v, int $code = 200)
    {
        $this->json($code, ['success' => true, 'response' => $v]);
    }

    public function jsonError($v, int $code = 400)
    {
        $this->json($code, ['success' => false, 'response' => $v]);
    }

    public function json(int $code, $v, array $headers = [])
    {
        $headers['Content-type'] = 'application/json';
        $this->send($code, json_encode($v), $headers);
    }

    public function send(int $code, string $content, array $headers = [])
    {
        http_response_code($code);
        foreach ($headers as $k => $v) {
            header("$k:$v");
        }
        echo  $content;
    }
}
