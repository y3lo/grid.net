<?php

/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:28
 */
class Autoloader {
    public static function autoload($class_name){

        $class_name = explode('_',$class_name);
        $class_name = implode('/',$class_name);
        $classpath = Core::CLASS_PATH.'/'.$class_name.'.php';
        if (file_exists($classpath) && is_readable($classpath)) {
            require_once $classpath;
        }
    }
    public static function core_autoload($class_name){

        $class_name = explode('_',$class_name);
        $class_name = implode('/',$class_name);
        $classpath = 'core/'.$class_name.'.php';
        if (file_exists($classpath) && is_readable($classpath)) {
            require_once $classpath;
        }
    }
}