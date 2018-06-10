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

    public function publicCode(): string
    {
        return Code::ERROR_INVALID_INPUT;
    }

    public function publicExtra(): array
    {
        return $this->validation->errors()->all();
    }
}
