<?php

return array(
    'debug' => array(
        'enabled' => false,
        'section' => 'main',
        'logs_path' => APPLICATION_PATH.'/data/logs',
    ),
    'modules' => array(
        'Album',
        'Say',
        'Bay',
    ),
    'restler' => array(
        'production_mode' => true,
        'cache_dir' => realpath('data/cache/restler/')
    ),
    'db' => array(
        'connections' => array(
            'main' => array(
                'host' => null,
                'port' => null,
                'socket' => '/var/lib/mysql/mysql.sock',
                'username' => 'root',
                'password' => '',
                'dbname' => 'zf2rest',
                'charset' => 'utf8',
//                'charset' => 'cp1251',
            )
        )

//        'host' => 'localhost',
//        'username' => 'root',
//        'password' => '',
//        'dbname' => 'zf2rest',
    )
);
