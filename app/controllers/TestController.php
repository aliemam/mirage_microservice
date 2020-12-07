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

namespace App\Controller;

use Mirage\Http\Response;
use Mirage\Libs\L;

class TestController extends \Mirage\App\Controller
{
    public function test()
    {
        return Response::create(["test" => "ok"]);
    }
}
