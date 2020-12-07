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

use Mirage\Libs\Helper;

return [
    /**
     * app identity
     */
    'env' => 'dev', // dev or prod
    'uuid' => 'fake_uuid',
    'name' => 'mirage',
    'base_url' => 'http://mirage.local/',
    'default_timezone' => 'Europe/Helsinki',
    'lang' => 'en',
    'callback_lang' => 'en',

    /**
     * resources
     */
    'storage_url' => 'http://mirage.local/storage/',
    'image_url' => 'http://mirage.local/storage/image/',
    'audio_url' => 'http://mirage.local/storage/audio/',
    'application_url' => 'http://mirage.local/storage/application/',
    'text_url' => 'http://mirage.local/storage/text/',
    'video_url' => 'http://mirage.local/storage/video/',
    'max_image_upload_size' => 5000000, //5MB,

    /**
     * request
     */
    'allow_origins' => ['*'],
    'allow_methods' => ['GET', 'POST', 'PUT', 'OPTIONS', 'DELETE', 'HEAD', 'CONNECT', 'PATCH', 'PURGE', 'TRACE'],
    'allow_headers' => ['Origin', 'X-Requested-With', 'content-type','M-AUTH', 'M-HASH', 'M-TIME', 'M-VERSION', 'M-RANDOM', 'M-LANG'],
];
