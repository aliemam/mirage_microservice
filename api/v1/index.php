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
require_once(__DIR__ . '/../../bootstrap/preload.php');

$time = microtime(true);
$mem = memory_get_usage();

try {
    $app = \Mirage\Core::getRestApp();
    $app->run();
} catch (\Mirage\Exceptions\HttpException $e) {
    \Mirage\Libs\L::e($e->getMessage());
    $e->getResponse()->sendResponse();
} catch (\Exception $e) {
    \Mirage\Libs\L::e($e->getMessage());
    \Mirage\Libs\L::e($e->getTraceAsString());
}

\Mirage\Libs\L::d('M: ' . (memory_get_usage() - $mem) / (1024 * 1024) . ' - S: ' . (microtime(true) - $time));
\Mirage\Libs\L::d('[Request ENDS] ' . $_SERVER['REQUEST_URI']);
