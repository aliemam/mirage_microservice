<?php
require_once(__DIR__ . '/../vendor/aliemam/mirage_core/src/Core.php');

try {
// init mirage framework
    \Mirage\Core::boot();
// create logger with prefix "api"
    \Mirage\Libs\Config::boot();
    \Mirage\Libs\Logger::boot();
    \Mirage\Libs\Cache::boot();

} catch (ErrorException $e) {
    die("BOOT ERROR: " . $e->getMessage());
}

try {
// create micro app
    $app = \Mirage\Core::getRestApp();
    $app->bootFrameworkDefaults();
    $app->bootAppDefaults();
} catch (ErrorException $e) {
    die("StartUp ERROR: " . $e->getMessage());
}