<?php

$dir = dirname(__FILE__);
require $dir.'/../vendor/autoload.php';

$app = new \Letitrun\F3Support\App;
$app->exportEnvVars($dir.'/../src');
$app->registerErrorHandler(new Letitrun\F3Support\Exception\Handler);
$app->registerRoutes($dir.'/../src/http/routes.php');
$app->run();
