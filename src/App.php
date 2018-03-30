<?php

namespace Letitrun\F3Support;

use Base; // F3's base instance
use Letitrun\F3Support\Exception\Handler;

class App
{
    /**
     * @var Base
     */
    protected $f3;

    public function __construct()
    {
        $this->f3 = Base::instance();
    }

    public function exportEnvVars(string $dir)
    {
        (new \Dotenv\Dotenv($dir))->load();
    }

    public function registerErrorHandler(Handler $handler)
    {
        $callback = function (Base $f3) use ($handler) {
            $handler->handle($f3->get('EXCEPTION'));
        }

        $this->f3->set('ONERROR', $callback);
    }

    public function registerRoutes(string $path)
    {
        foreach (require_once $path as $route) {
            // E.g. ('GET @health_status /health/status', 'Letitrun\F3Support\Http\HealthController->getStatus')
            $this->f3->route($route[0].' @'.$route[1].': '.$route[2], $route[3].'->'.$route[4]);
        }
    }

    public function run()
    {
        $this->f3->run();
    }
}
