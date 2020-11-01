<?php
require_once(__DIR__ . '/../vendor/aliemam/mirage_core/src/Core.php');

// init mirage framework
\Mirage\Core::boot();

// create micro app
$app = \Mirage\Core::getRestApp();
$app->bootFrameworkDefaults();
$app->bootAppDefaults();

// create logger with prefix "api"
\Mirage\Libs\Config::create();
\Mirage\Libs\Logger::create("api");
//TODO: Cache should be rewritten
//\Mirage\Libs\Cache::create();