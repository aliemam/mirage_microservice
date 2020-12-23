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

namespace App\Routes;

use App\Controllers\TestController;
use Mirage\Libs\Route;

class TestRoute extends \Mirage\App\RoutesCollection
{
    public function __construct()
    {
        // setting handler for the route, which should be a class extended from \Mirage\App\Controller object.
        $this->setHandler(new TestController());

        // prefix of the route
        $this->setPrefix('/test');

        // each value should be class of \Mirage\Libs\Route object.
        $this->setRoutes([
            new Route('/', 'get', 'test')
        ]);
    }
}
