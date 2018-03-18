<?php

namespace Letitrun\F3Support\Exception;

use Rakit\Validation\Validation;

/**
 * ValidationException.
 */
class ValidationException extends Exception
{
    /**
     * Validation instance.
     * @var Validation
     */
    protected $validation;

    /**
     * @param Validation $validation
     */
    public function __construct(Validation $validation)
    {
        $this->validation = $validation;
    }

    /**
     * {@inheritDoc}
     */
    public function publicCode(): string
    {
        return Code::ERROR_VALIDATION;
    }

    /**
     * {@inheritDoc}
     */
    public function publicExtra(): array
    {
        return $this->validation->errors()->all();
    }
}
