<?php
return [
    'default' => 'redis',
    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => runtime_path('cache')
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache'
        ],
        'array' => [
            'driver' => 'array'
        ],
        'apcu' => [
            'driver' => 'apcu'
        ]
    ]
];