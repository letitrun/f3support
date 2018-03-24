<?php

namespace Letitrun\F3Support\Http;

class Response
{
    public function send(int $code, string $content, array $headers = [])
    {
        http_response_code($code);
        foreach ($headers as $k => $v) { header("$k:$v"); }
        echo  $content;
    }
}
