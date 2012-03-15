<?php


class Bay {
    // curl -X GET http://<host>/bay/baybay
    function baybay($to = 'world') {
        $ret_data['to'] = $to;

        $conf = \Ria\Config::getInstance()->getConfig();
        $db = new Ria\Db\MySQL\MySQLi('main', $conf['db']);
        $ret_data['sql_result'] = $db->getArray('SELECT * FROM album');

        return $ret_data;
    }

}
