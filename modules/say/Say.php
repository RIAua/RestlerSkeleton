<?php

//http://restler-skeleton.lcoal-ria.ua/say/hello
class Say {

    // curl -X GET http://<host>/say/wassup/fred -H="Range: items=0-24"
    function wassup($word = 'max', $request_range_items = null) {
        return array(
            'say'          => $word,
            'hours_limits' => $request_range_items
        );
    }

    // curl -X GET http://<host>/say/hello
    function hello($to = 'world') {
        $ret_data['to'] = $to;
//        $conf = \Ria\Config::getInstance()->getPreparedConfig();
//        $db = new Ria\Db\MySQL\MySQLi('main', $conf['db']);
//        $ret_data['sql_result'] = $db->getArray('SELECT * FROM album');

        return $ret_data;
    }

}
