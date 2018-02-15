<?php
/*** configuration *****/
ini_set('display_errors','on');
error_reporting(E_ALL);


class MyAutoload
{

    public static function start()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));


        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('ROOT', $root.'citation/');
        define('HOST', 'http://'.$host.'/citation/');

        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');
        define('LIB', ROOT.'lib/');


        define('ASSETS', HOST.'assets/');
    }


    public static function autoload($class)
    {
        if(file_exists(MODEL.$class.'.php')) {
            include_once(MODEL.$class.'.php');
        } else if(file_exists(LIB.$class.'.php')){
            include_once(LIB.$class.'.php');
        } else {
            include_once(CONTROLLER.$class.'.php');
        }

    }


}


