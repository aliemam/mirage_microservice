<?php

// namespace App\Middleware;

// use Mirage\Libs\Config;
// use Mirage\Libs\Helper;
// use Mirage\Libs\L;
// use Mirage\App\Micro;
// use Mirage\Middleware\BaseMiddleware;
// use Phalcon\Events\Event;

// /**
//  * Class Auth
//  * @package Mirage
//  */

// class Hash extends BaseMiddleware {

//     const NAME = 'hash_token';

//     public function check(Event $event, Micro $app) {
//         if(Config::get('app.env')==='dev') {
//             L::d('bypass middleware: ' . self::NAME);
//             return TRUE;
//         }
//         $headers = Helper::getHeaders();
//         $hash = $headers['m-hash'] ?? null;
//         $version = $headers['m-version'] ?? null;
//         $time = $headers['m-time'] ?? null;
//         $random = $headers['m-random'] ?? null;
//         L::d('M-HASH: ' . $hash);
//         L::d('M-VERSION: ' . $version);
//         L::d('M-TIME: ' . $time);
//         L::d('M-RANDOM: ' . $random);

//         \App\Libs\Hash::check($hash, $version, $time, $random);

//         return TRUE;
//     }


//     public function call(\Phalcon\Mvc\Micro $app) {
//         return TRUE;
//     }
// }
