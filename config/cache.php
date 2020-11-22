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
    'cache1' => [
        'adapter' => 'redis',
        'serializer' => 'json',
        'lifetime' => 31536000,
        'prefix' => '_mirage_',
        'host' => '127.0.0.1',
        'port' => 6379,
        'index' => 1,
        'persistent' => TRUE
    ],
//    'cache2' => [
//        'adapter' => 'memcached',
//        'serializer' => 'json',
//        'prefix' => '_mirage_',
//        'host' => '127.0.0.1',
//        'persistentId' => '_mcid_',
//        'lifetime' => 31536000,
//        'servers' => [
//            0 => [
//                'host' => '127.0.0.1',
//                'port' => 11211,
//                'weight' => 1,
//            ]
//        ],
//    ]
];
