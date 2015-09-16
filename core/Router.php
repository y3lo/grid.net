<?php

/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:51
 */
    $module_path = MODULES_PATH.'/index.php';
    $view_path = VIEWS_PATH.'/index.html';


    $uri_path = $_SERVER['REQUEST_URI'];
    if($uri_path != '/'){
        $url_path = parse_url($uri_path, PHP_URL_PATH);
        $uri_parts = explode('/', trim($url_path, ' /'));
            if(file_exists(MODULES_PATH.'/'.$uri_parts[0].'.php') && file_exists(VIEWS_PATH.'/'.$uri_parts[0].'.html')){
                $module_path = MODULES_PATH.'/'.$uri_parts[0].'.php';
                $view_path = VIEWS_PATH.'/'.$uri_parts[0].'.html';
            }else{
                $module_path = MODULES_PATH.'/index.php';
                $view_path = VIEWS_PATH.'/index.html';
            }
    }