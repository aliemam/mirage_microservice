<?php
/*
  +------------------------------------------------------------------------+
  | Mirage Micro Application                                               |
  +------------------------------------------------------------------------+
  | Copyright (c) 2018-2020                                                |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to help@aemirage.com so we can send you a copy immediately.            |
  +------------------------------------------------------------------------+
  | Authors: Ali Emamhadi <aliemamhadi@aemirage.com>                       |
  +------------------------------------------------------------------------+
*/

/**
 * This is part of Mirage Micro Service Application
 *
 * @author Ali Emamhadi <aliemamhadi@gmail.com>
 */

/**
 * This file should be add to opcache.preload property in php.ini.
 * This file boot all the necessary components of the framework. if you want to initiate or boot anything to use
 * in the app, this file is a good choice.
 */
require_once(__DIR__ . '/../vendor/aliemam/mirage_core/src/Core.php');

try {
    // init mirage framework Core class
    \Mirage\Core::boot();

    // load all the configs under the path: {path_to_micro_service}/config
    \Mirage\Libs\Config::boot();

    // create loggers defined in logger.php under the config folder
    \Mirage\Libs\Logger::boot();

    // create caches defined in cache.php under the config folder
    \Mirage\Libs\Cache::boot();

} catch (ErrorException $e) {
    die("BOOT ERROR: " . $e->getMessage());
}

try {
    // create mirage rest app
    $app = \Mirage\Core::getRestApp();

    // boot all framework's default components and services
    $app->bootFrameworkDefaults();

    // boot all app's default components and services
    $app->bootAppDefaults();
} catch (ErrorException $e) {
    die("StartUp ERROR: " . $e->getMessage());
}