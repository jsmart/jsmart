<?php

return [
    'default'   => '',

    'channels'  => [

        'single'    => [
            'driver'    => 'single',
            'path'      => storage_path('logs/jsmart.log'),
            'level'     => 'debug',
        ],

        'daily'    => [
            'driver'    => 'daily',
            'path'      => storage_path('logs/jsmart.log'),
            'level'     => 'debug',
            'days'      => 14,
        ],

        'syslog'    => [
            'driver'    => 'syslog',
            'level'     => 'debug',
        ],

        'errorlog'    => [
            'driver'    => 'errorlog',
            'level'     => 'debug',
        ],

    ],

];