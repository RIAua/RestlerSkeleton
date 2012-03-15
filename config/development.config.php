<?php

return array(
    'extends' => 'testing',
    'restler' => array(
        'production_mode' => false,
    ),
    'db' => array(
        'connections' => array(
            'main' => array(
                'username' => 'root',
                'password' => '',
                'dbname' => 'zf2rest',
            )
        )
    ),
    
    'some_devel_conf_section' => array(
        'some_devel_param'
    ),
);
