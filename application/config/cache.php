<?php

return [
    'default'   => 'file',

    'stores'    => [

        'apc'       => [
            'driver' => 'apc',
        ],

        'array'     => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database'  => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
            'lock_connection' => null,
        ],

        'file'      => [
            'driver' => 'file',
            'path' => base_path('application/storage/cache/default'),
        ],

        'system'      => [
            'driver' => 'file',
            'path' => base_path('application/storage/cache/system'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => '',
            'sasl' => [
                'MEMCACHED_USERNAME', 'MEMCACHED_PASSWORD',
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => '127.0.0.1',
                    'port' => 11211,
                    'weight' => 100,
                ],
            ],
        ],

        'redis'     => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'default',
        ],

        'dynamodb'  => [
            'driver' => 'dynamodb',
            'key' => 'AWS_ACCESS_KEY_ID',
            'secret' => 'AWS_SECRET_ACCESS_KEY',
            'region' => 'us-east-1',
            'table' => 'cache',
            'endpoint' => 'DYNAMODB_ENDPOINT',
        ],

        'octane'    => [
            'driver' => 'octane',
        ],

    ],

    'prefix'    => 'jsmart_cache_',

];