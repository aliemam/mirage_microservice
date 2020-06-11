<?php

namespace App\Routes;

class TestRoute extends \Mirage\App\RoutesCollection
{
    public function __construct()
    {
        $this->setCollectionHandler('App\Controllers\TestController')
            ->setCollectionPrefix('/test')
            ->setCollectionRoutes([
                [
                    'path' => '/test',
                    'method' => 'get',
                    'action' => 'test',
                ],
            ]);
    }
}
