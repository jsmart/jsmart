<?php

return [
    'driver'            => 'file',
    'lifetime'          => 120,
    'expire_on_close'   => false,
    'encrypt'           => false,
    'files'             => base_path('application/storage/sessions'),
    'connection'        => '',
    'table'             => 'sessions',
    'store'             => '',
    'lottery'           => [2, 100],
    'cookie'            => 'jsmart_session',
    'path'              => '/',
    'domain'            => '',
    'secure'            => false,
    'http_only'         => true,
    'same_site'         => 'lax',
];