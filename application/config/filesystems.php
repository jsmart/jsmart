<?php

return [
    'default'   => 'local',

    'disks'     => [

        'local' => [
            'driver'    => 'local',
            'root'      => base_path('application/storage/files'),
        ],

        'public' => [
            'driver'        => 'local',
            'root'          => base_path('application/storage/public'),
            'url'           => '/storage',
            'visibility'    => 'public',
        ],

        's3' => [
            'driver'                    => 's3',
            'key'                       => 'AWS_ACCESS_KEY_ID',
            'secret'                    => 'AWS_SECRET_ACCESS_KEY',
            'region'                    => 'AWS_DEFAULT_REGION',
            'bucket'                    => 'AWS_BUCKET',
            'url'                       => 'AWS_URL',
            'endpoint'                  => 'AWS_ENDPOINT',
            'use_path_style_endpoint'   => false,
        ],
    ],

    'links' => [

    ],
];