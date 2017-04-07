<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

return [
    'media' => [
        'driver' => \Adapter\AliOSS::class,
        'options' => [
            'app_key' => env('app_key'),
            'app_secret' => env('app_secret'),
            'endpoint' => env('endpoint'),
        ]
    ]
];