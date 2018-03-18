<?php

namespace Letitrun\F3Support\Exception;

use Exception as PhpException;

/**
 * Abstract exception class.
 */
abstract class Exception extends PhpException
{
    /**
     * Gets public exception code.
     * @return string
     */
    abstract public function publicCode(): string;

    /**
     * Gets public exception extra contextual data.
     * @return array
     */
    abstract public function publicExtra(): array;
}
