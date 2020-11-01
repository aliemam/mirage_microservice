<?php

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
