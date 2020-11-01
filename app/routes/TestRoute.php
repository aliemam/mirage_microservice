<?php

namespace App\Route;

use App\Controller\TestController;
use Mirage\Libs\Route;

class TestRoute extends \Mirage\App\RoutesCollection
{
    public function __construct()
    {
        $this->setHandler(new TestController());
        $this->setPrefix('/test');
        $this->setRoutes([
            new Route('/', 'get', 'test')
        ]);
    }
}
