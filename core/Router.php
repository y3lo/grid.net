<?php

/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:51
 */
class Router
{
    private $uri_path;
    private $module_path = Core::MODULES_PATH.'/index.php';
    private $view_path = Core::VIEWS_PATH.'/index.php';

    public function __construct($db){
        $this->uri_path = $_SERVER['REQUEST_URI'];
        if($this->uri_path != '/'){
            $url_path = parse_url($this->uri_path, PHP_URL_PATH);
            $uri_parts = explode('/', trim($url_path, ' /'));
                if(file_exists(Core::MODULES_PATH.'/'.$uri_parts[0].'.php') && file_exists(Core::VIEWS_PATH.'/'.$uri_parts[0].'.php')){
                    $this->module_path = Core::MODULES_PATH.'/'.$uri_parts[0].'.php';
                    $this->view_path = Core::VIEWS_PATH.'/'.$uri_parts[0].'.php';
                }else{
                    $this->module_path = Core::MODULES_PATH.'/index.php';
                    $this->view_path = Core::VIEWS_PATH.'/index.php';
                }
        }
        require $this->module_path;
        require $this->view_path;
    }
}