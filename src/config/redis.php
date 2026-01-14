<?php
return [
    'default' => [
        'password' => 'secret_redis',
        'host' => '192.168.72.131',
        'port' => 6379,
        'database' => 0,
    ],
    'cache' => [
        'password' => 'secret_redis',
        'host' => '192.168.72.131',
        'port' => 6379,
        'database' => 1,
        'prefix' => 'webman_cache-',
    ]
];