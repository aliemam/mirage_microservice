<?php

/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/19/17
 * Time: 7:35 PM
 */

return [
    /**
     * app identity
     */
    'name' => $_ENV['APP_NAME'],
    'api_url' => '',
    'default_timezone' => 'Asia/Tehran',
    'lang' => 'fa',
    'callback_lang' => 'en',
    'channel_id' => 'dc446df1-3849-4d05-b541-4af3c220c13d',

    /**
     * logging and caching
     */
    'env' => 'dev',
    'log_mode' => '', // complete,
    'log_max_length' => 1500,
    'enable_cache' => false,

    /**
     * resources
     */
    'storage_url' => $storage_url,
    'image_url' => $storage_url . '/image',
    'audio_url' => $storage_url . '/audio',
    'application_url' => $storage_url . '/application',
    'text_url' => $storage_url . '/text',
    'video_url' => $storage_url . '/video',
    'max_image_upload_size' => 5000000, //5MB,

    /**
     * request
     */
    'allow_origins' => '*',
    'allow_methods' => 'GET,PUT,POST,DELETE,OPTIONS',
    'allow_headers' => 'Origin,X-Requested-With,content-type,OF-AUTH,OF-HASH,
    OF-TIME,OF-VERSION,OF-RANDOM,OF-LANG,OF-SOURCE',

    /**
     * panel
     */
    'panel_store_url' => $panel_store_url,
    'panel_store_admin_url' => $panel_store_url . '/admin',

    /**
     * item
     */
    'forbidden_items' => [],

];
