<?php
/**
 * Various helper methods.
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
 * Strips comment out of given string sql.
 * @param  string $v
 * @return string
 */
function strip_sql(string $v): string
{
    return preg_replace('@(--[^\r\n]*)|(\#[^\r\n]*)|(/\*[\w\W]*?(?=\*/)\*/)@ms', '', $v);
}
