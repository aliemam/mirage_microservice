<?php
require_once(__DIR__ . '/../vendor/aliem/mirage/src/Mirage.php');

// init mirage framework
Mirage::boot();

// create logger with prefix "api"
\Mirage\Libs\Logger::create("api");

// create micro app
$app = Mirage::getRestApp();
$app->bootFrameworkDefaults();
$app->bootAppDefaults();

return $app;
