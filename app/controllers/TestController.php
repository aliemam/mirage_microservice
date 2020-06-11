<?php

namespace App\Controllers;

use Mirage\Http\Response;

class TestController extends \Mirage\App\Controller
{
    public function test(): Response
    {
        return Response::create(["test" => "ok"]);
    }
}
