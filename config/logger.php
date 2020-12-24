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
    'mlog' => [
//        This is where you choose your stream type, it could be any string in format of available stream listed:
//        https://www.php.net/manual/en/wrappers.php
        'path' => 'file://'.LOG_DIR.'/mlog.log',

//        This should be either 'line' or 'json', indicates the logging format.
//        In case of linear: "[$type][$tracker][$tag][$ip][$route] $message"
//        In case of json: {"type": $type, "timestamp": $date, "message": "[$tracker][$tag][$ip][$route] $message"}
        'type' => 'line',

//        This variable can be used when you want to just log a maximum char in each logger call.
//        if it was null, logger will log complete message.
        'max_length' => null,

//        This variable can be used when you want to add more data to all messages.
//        You can use setLoggerTracker method to overwrite it, but be aware in case of use php preload
//        restart server.
//        If $tracker was provided by developer. developer can track that string in logs.
        'tracker' => 'TT',

//        This variable can be used when you want to add more data to all messages.
//        You can use setLoggerTracker method to overwrite it, but be aware in case of use php preload
//        restart server.
//        If $tag was provided by developer. developer can track that string in logs.
        'tag' => 'NT',

//        This is Phalcon\Logger log level constant
        'level' => \Phalcon\Logger::DEBUG
    ]
];
