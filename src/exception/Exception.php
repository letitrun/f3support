<?php

namespace Letitrun\F3Support\Exception;

use Exception as PhpException;

abstract class Exception extends PhpException
{
    abstract public function getPublicCode(): string;

    abstract public function getPublicExtra(): array;
}
