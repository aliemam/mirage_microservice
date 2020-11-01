<?php

namespace App\Routes;

use Mirage\Libs\Route;

class TestRoute extends \Mirage\App\RoutesCollection
{
    public function __construct()
    {
        $this->setHandler('App\Controllers\TestController', false);
        $this->setPrefix('/test');
        $this->setRoutes([
            new Route('/', 'get', 'test')
        ]);
    }
}
