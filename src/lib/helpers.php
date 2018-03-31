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

function array_pull(array & $v, $k)
{
    $r = $v[$k];
    unset($v[$k]);
    return $r;
}
