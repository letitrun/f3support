<?php
/**
 * Various helper methods.
 */

/**
 * General
 */

/**
 * Gets the value of environment variable.
 * @param  string     $k
 * @param  mixed|null $default
 * @return mixed|null
 */
function env(string $k, $default = null)
{
    $v = getenv($k);
    if ($v === false) {
        return $default;
    }
    switch ($v) {
        case 'true':
            return true;
        case 'false':
            return false;
        case 'empty':
            return '';
        case 'null':
            return null;
        default:
            return $v;
    }
}

/**
 * HTTP
 */

/**
 * Renders/echo JSON to output stream.
 * @param mixed $v
 */
function jsonOk($v)
{
    (new \Letitrun\F3Support\Http\Response)->jsonOk($v);
}

/**
 * Renders/echo JSON to output stream with error headings.
 * @param mixed $v
 * @param int   $code
 */
function jsonError($v, int $code = 400)
{
    (new \Letitrun\F3Support\Http\Response)->jsonError($v, $code);
}

/**
 * Arrays
 */

/**
 * Returns unique values out of given list.
 * @param  array  $v
 * @return array
 */
function list_unique(array $v): array
{
    return array_values(array_unique($v));
}

/**
 * Pulls and returns value for given key from array.
 * @param  array $v
 * @param  mixed $k
 * @return mixed
 */
function array_pull(array & $v, $k, $d = null)
{
    $r = $v[$k] ?? $d;
    unset($v[$k]);
    return $r;
}
