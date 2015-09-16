<?php
/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:47
 */
class DBConnect{
    function __construct(){
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
        return $db;
    }
}