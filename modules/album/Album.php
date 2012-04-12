<?php

class Album extends \Ria\Rest\CrudAdapter {
#############################################
// for methods
//    some first param => id (string)
//    
//    http://restler-skeleton.lcoal-ria.ua/math/multiply/?param1=1&param2=2
//    $request_data => to array()
//    http://restler-skeleton.lcoal-ria.ua/math/multiply/2/5
//    $n1, $n2, $n3...$nN params
#############################################
    /*
        CREATE TABLE album (
            id int(11) NOT NULL auto_increment,
            artist varchar(100) NOT NULL,
            title varchar(100) NOT NULL,
            PRIMARY KEY (id)
        );
        INSERT INTO album (artist, title) VALUES ('The Military Wives', 'In My Dreams');
        INSERT INTO album (artist, title) VALUES ('Adele', '21');
        INSERT INTO album (artist, title) VALUES ('Bruce Springsteen', 'Wrecking Ball (Deluxe)');
        INSERT INTO album (artist, title) VALUES ('Lana Del Rey', 'Born To Die');
        INSERT INTO album (artist, title) VALUES ('Gotye', 'Making Mirrors');
     */
#############################################  

    public function __construct() {
        // strtolower(__CLASS__)  - is module name
        parent::__construct(strtolower(__CLASS__),APPLICATION_ENV);
    }
    
//    curl -X GET http://restler-skeleton.local-ria.ua/album -H "debug: true" -H "debug-section: sometest"
//    
//    curl -X POST http://restler-skeleton.local-ria.ua/album
//    curl -X POST http://restler-skeleton.local-ria.ua/album/<id>
//    curl -X POST http://restler-skeleton.local-ria.ua/album -H "Content-Type: application/json" -d '{"artist": "Coldplay", "title": "Viva La Vida"}'
//    curl -X PUT http://restler-skeleton.local-ria.ua/album/<id> -H "Content-Type: application/json" -d '{"artist": "Coldplay", "title": "Viva La Vida"}'
//    curl -X DELETE http://restler-skeleton.local-ria.ua/album/<id>

// if You need more request/response information, use "-v" or "--verbose" flags 
// example:
// curl -v -X GET http://restler-skeleton.local-ria.ua/album
}