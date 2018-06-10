<?php

namespace Letitrun\F3Support\Traits;

trait Singleton
{
    public static $instance;

    public static function instance()
    {
        return static::$instance ?: static::$instance = new static;
    }

    protected function __construct()
    {
        $this->init();
    }

    protected function init()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
