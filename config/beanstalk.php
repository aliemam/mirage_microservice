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

return [
    'connection' => [
        'host' => '127.0.0.1',
        'port' => 11300,
        'timeout' => 10
    ],
    'queues' => [
        'tube1' => [
            'class' => '\App\Queues\TestQueue',
            'worker_numbers' => 2
        ],
//        'tube2' => [
//            'class' => '\App\Queues\TestQueue',
//            'worker_numbers' => 1
//        ]
    ]
];
