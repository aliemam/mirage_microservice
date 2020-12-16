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
    // All namespaces should be defined here to access from other parts of the app.
    'Namespaces' => [
        // app
        'App' => APP_DIR,
        'App\Constants' => APP_DIR . '/constants/',
        'App\Controllers' => APP_DIR . '/controllers/',
        'App\Interfaces' => APP_DIR . '/interfaces/',
        'App\Libs' => APP_DIR . '/libs/',
        'App\Middlewares' => APP_DIR . '/middleware/',
        'App\Models' => APP_DIR . '/models/',
        'App\Routes' => APP_DIR . '/routes/',
        'App\Traits' => APP_DIR . '/traits/',
        'Bootstrap' => MIRAGE_APP_DIR . '/bootstrap',
    ],

    // All the PHP files under each directory which is defined here can be accessed from other parts of the app.
    'Dirs' => [],

    // All the PHP files which are defined here can be accessed from other parts of the app.
    'Files' => []
];
