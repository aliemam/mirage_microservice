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

return [
    'driver' => 'redis', // could be redis, memcached, ... (supported by Phalcon cache drivers)
    'redis' => [
        'host' => '127.0.0.1',
        'prefix' => ':mirage:',
        'persistent' => FALSE,
        'port' => 6379,
        'index' => 0,
        'statsKey' => '_PHCR',
    ],
    'memcached' => [
        'host' => '127.0.0.1',
        'prefix' => ':mirage:',
        'persistent' => FALSE,
        'port' => 11211,
        'weight' => '1',
        'statsKey' => '_PHCR',
    ]
];
