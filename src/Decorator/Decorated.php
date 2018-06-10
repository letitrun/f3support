<?php

namespace Letitrun\F3Support\Decorator;

/**
 * Decorates an $instance with passed $decorators, i.e. on every call first
 * corresponding method of decorators would be called before finally calling the
 * same method on $instance.
 */
class Decorated
{
    /**
     * @var mixed
     */
    public $instance;

    /**
     * @var array [Decorator]
     */
    public $decorators;

    public function __construct($instance, ...$decorators)
    {
        $this->instance = $instance;
        $this->decorators = $decorators;
    }

    public function __get(string $name)
    {
        return $this->instance->$name;
    }

    public function __call(string $call, array $args)
    {
        foreach ($this->decorators as $decorator) {
            $decorator->$call(...$args);
        }

        return $this->instance->$call(...$args);
    }
}
