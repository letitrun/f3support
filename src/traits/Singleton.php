<?php

namespace Letitrun\F3Support\Traits;

trait Singleton
{
    public static $instance;

    public static function getInstance()
    {
        return static::$instance ?: static::$instance = new static;
    }

    protected function __construct()
    {
        $this->initialize();
    }

    protected function initialize()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}