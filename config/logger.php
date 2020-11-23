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
    'mlog' => [
//        This is a path to save log file in the format of {logger_name}_{Y-m-d}.log
        'path' => LOG_DIR,

//        This variable can be used when you want to just log a maximum char in each logger call.
//        if it was null, logger will log complete message.
        'max_length' => null,

//        This variable can be used when you want to add more data to all messages.
//        At the end each massage will be in this format:
//        "[$time][$type] [$tag][$ip][$route] $prefix$message"
//        If $tag was provided by developer. developer can track that string in logs.
        'tag' => 'NT',

//        This is Phalcon\Logger log level constant
        'level' => \Phalcon\Logger::DEBUG
    ]
];
