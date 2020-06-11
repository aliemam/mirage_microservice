<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/19/17
 * Time: 7:35 PM
 */
return [
    'driver' => 'redis', // could be redis, memcached, ... (supported by Phalcon cache drivers)
    'redis' => [
        'host' => '127.0.0.1',
        'prefix' => ':offer:',
        'persistent' => FALSE,
        'port' => 6379,
        'index' => 0,
        'statsKey' => '_PHCR',
    ],
    'memcached' => [
        'host' => '127.0.0.1',
        'prefix' => ':offer:',
        'persistent' => FALSE,
        'port' => 11211,
        'weight' => '1',
        'statsKey' => '_PHCR',
    ]
];