<?php

/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/19/17
 * Time: 7:35 PM
 */

return [
    'db' => function () {
        $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(\Mirage\Libs\Config::get('db.mysql'));
        return $connection;
    }
];
