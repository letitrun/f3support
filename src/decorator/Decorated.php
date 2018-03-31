<?php

namespace Letitrun\F3Support\Decorator;

class Decorated
{
    public $instance;
    public $decorators;

    public function __construct($instance, ...$decorators)
    {
        $this->instance   = $instance;
        $this->decorators = $decorators;
    }

    public function __call(string $call, array $args)
    {
        foreach ($this->decorators as $decorator) {
            $decorator->$call(...$args);
        }

        return $this->instance->$call(...$args);
    }
}
