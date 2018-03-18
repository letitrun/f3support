<?php

namespace Letitrun\F3Support\Http;

/**
 * Response
 */
class Response
{
    /**
     * Renders content.
     * @param  int    $code
     * @param  string $content
     * @param  array  $headers
     */
    public function send(int $code, string $content, array $headers = [])
    {
        http_response_code($code);
        foreach ($headers as $k => $v) { header("$k:$v"); }
        echo  $content;
    }
}
