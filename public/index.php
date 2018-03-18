<?php

// Autoloads composer packages.
require './../vendor/autoload.php';

// Gets f3 application instance.
$f3 = \Base::instance();

// Registers a few sample routes.
$f3->route('GET /health/status','Letitrun\F3Support\Http\HealthController->getStatus');

// Registers application error handler.
$handler = new \Letitrun\F3Support\Exception\Handler;
$f3->set('ONERROR', function (\Base $f3) use ($handler) { $handler->handle($f3->get('EXCEPTION')); });

// Finally, run the application.
$f3->run();
