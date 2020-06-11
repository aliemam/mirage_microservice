<?php

// namespace App\Middleware;

// use App\Libs\Auth;
// use Mirage\Libs\Helper;
// use Mirage\Libs\L;
// use Mirage\App\Micro;
// use Phalcon\Events\Event;

// /**
//  * Class Auth
//  * @package Mirage
//  */

// class Auth extends \Mirage\Middleware\Auth
// {
//     const NAME = 'admin_auth_token';

//     public function check(Event $event, Micro $app)
//     {
//         $headers = Helper::getHeaders();
//         $auth_header = $headers['m-auth'] ?? null;
//         L::d('M-AUTH: ' . $auth_header);

//         Auth::setHashKey($this->hash);
//         Auth::checkToken($auth_header);
//         Auth::processToken('\App\Models\DB\Baaraaz\Admin', '\App\Models\DB\Baaraaz\AdminToken',false);

//         return TRUE;
//     }
// }
