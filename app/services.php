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

use Mirage\Libs\Config;
use Mirage\Constants\Services;
use Phalcon\Db\Adapter\Pdo\Mysql;

/**
 * All Services in form of {service_name} => {callback_function returns an Object}.
 * These services are added to the framework dependency injection and could be retrieved this way:
 * \Mirage\RestApp::getSrv(service_name);
 */
return [
    Services::DB => function () {
        return new Mysql(Config::get('db.mysql'));
    }
];
