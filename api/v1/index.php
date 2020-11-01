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
 * This is part of Mirage Micro Application
 *
 * @author Ali Emamhadi <aliemamhadi@gmail.com>
 */

$time = microtime(true);
$mem = memory_get_usage();

try {
    $app = require_once(__DIR__ . '/../../bootstrap/preload.php');
    $app->run();
} catch (\Exception $e) {
    echo $e->getMessage();
//    \Mirage\Libs\L::e($e->getMessage());
//    \Mirage\Libs\L::e($e->getTraceAsString());
//    \Mirage\Http\Response::sendError($e->getMessage());
}

//\Mirage\Libs\L::i('MEMORY USAGE: ' . (memory_get_usage() - $mem) / (1024 * 1024)
//    . ' - SECONDS: ' . (microtime(true) - $time));
//\Mirage\Libs\L::i('END OF REQUEST');
