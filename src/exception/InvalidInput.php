<?php

namespace Letitrun\F3Support\Exception;

use Rakit\Validation\Validation;

class InvalidInput extends Exception
{
    /**
     * @var Validation
     */
    protected $validation;

    public function __construct(Validation $validation)
    {
        $this->validation = $validation;
    }

    public function getPublicCode(): string
    {
        return Code::ERROR_INVALID_INPUT;
    }

    public function getPublicExtra(): array
    {
        return $this->validation->errors()->all();
    }
}
