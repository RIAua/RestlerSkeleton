<?php

return array(
    'crud' => array(
        'storage' => array(
            'driver' => 'mysql',
            'connection_name' => 'main',
//            'table' => 'zf2rest.album' 
            'table' => 'album' ,
        ),
        'data' => array(
            'key' => 'id',
//            'key' => 'artist',
            'fields' => array(
                'artist' => false, // not required
                'title' => false, // not required
//                'size' => true, // required
            )
        ),
        'cache_headers'  => 86400,
//        'cache_headers'  => 0,
    ),
);
