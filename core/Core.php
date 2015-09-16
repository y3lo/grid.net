<?php

/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:26
 */
class Core
{
    const CLASS_PATH = 'app/classes';
    const MODULES_PATH = 'app/modules';
    const VIEWS_PATH = 'app/views';
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_DBNAME = 'grid.net';
    const PJ_NAME = 'grid.net';
    const PJ_URL = 'http://grid.net/';

    private $display_error = true;
    private $default_timezone = 'Europe/Kiev';
    private $error_reporting = E_ALL;

    static public $db = null;

    function __construct(){}
    function run(){
        ini_set('display_errors',$this->display_error);
        error_reporting($this->error_reporting);

        date_default_timezone_set($this->default_timezone);
        spl_autoload_register(array('Autoloader','autoload'));
        spl_autoload_register(array('Autoloader','core_autoload'));
        $this->connect();
        new Router(self::$db);
    }
    private function connect(){
        $db = null;
        try{
            $db = new PDO('mysql:dbname='.Core::DB_DBNAME.';host=' .Core::DB_HOST, Core::DB_USER, Core::DB_PASS,
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                    PDO::ATTR_PERSISTENT => true
                ));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            $db_error = $e->getMessage();
        }
        return self::$db = $db;
    }
}