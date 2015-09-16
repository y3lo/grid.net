<?php
/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:47
 */
    try{
        $db = new PDO('mysql:dbname='.DB_DBNAME.';host=' .DB_HOST, DB_USER, DB_PASS,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                PDO::ATTR_PERSISTENT => true,
            ));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        $db_error = $e->getMessage();
    }