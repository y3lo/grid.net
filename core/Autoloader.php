<?php

class Autoloader {
    public static function autoload($class_name){

        $class_name = explode('_',$class_name);
        $class_name = implode('/',$class_name);
        $classpath = CLASS_PATH.'/'.$class_name.'.php';
        if (file_exists($classpath) && is_readable($classpath)) {
            include_once $classpath;
        }
    }
    public static function core_autoload($class_name){

        $class_name = explode('_',$class_name);
        $class_name = implode('/',$class_name);
        $classpath = 'core/'.$class_name.'.php';
        if (file_exists($classpath) && is_readable($classpath)) {
            include_once $classpath;
        }
    }
}