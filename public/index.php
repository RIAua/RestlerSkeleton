<?php

define('APPLICATION_PATH', dirname(__DIR__));
chdir(APPLICATION_PATH);
// linux namespace autoloader bugfix
if (stristr(PHP_OS, 'Linux')) spl_autoload_register(function($_class_name) {
            require_once str_replace('\\', '/', $_class_name) . '.php';
        });

// add folders to include_path
ini_set('include_path', 'vendor' . PATH_SEPARATOR . 'library' . PATH_SEPARATOR . ini_get('include_path'));

//set application environment
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

//prepare config and get him
$conf = \Ria\Config::getInstance()->prepareConf(APPLICATION_ENV)->getPreparedConfig();

// include restler
require_once (getenv('RESTLER_PATH') ? : 'vendor/Restler/restler/') . 'restler.php';

// setup debugging
\Ria\Debug\Log::getInstance()->prepare($conf['debug']);

// create restler object
$restler = new \Ria\Rest\Restler($conf['restler']['production_mode']); //for using cache headers
//$restler = new \Restler($conf['restler']['production_mode']);


//for more fast work with module routing on nginx
$predefined_module = getenv('APPLICATION_PREDEF_MODULE') ? ucfirst(getenv('APPLICATION_PREDEF_MODULE')) : null;
if($predefined_module) {
        // setup restler cache_dir from config - dir must be createt manualy!
        $restler->cache_dir = $conf['restler']['cache_dir'] . strtolower($predefined_module). '/';
        require_once 'modules/' . strtolower($predefined_module) . '/' . $predefined_module . '.php';
        $restler->addAPIClass($predefined_module);
} else {   
    // setup restler cache_dir from config
    $restler->cache_dir = $conf['restler']['cache_dir'];
    // add modules from config
    foreach ($conf['modules'] as $module) {
        require_once 'modules/' . strtolower($module) . '/' . $module . '.php';
        $restler->addAPIClass($module);
    }
}
$restler->handle();
//nothing do after handle (die)