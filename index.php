<?php

include_once 'core/Core.php';
include_once 'core/DBConnect.php';
include_once 'core/Autoloader.php';
include_once 'core/Router.php';

spl_autoload_register(array('Autoloader','autoload'));

include_once $module_path;
include_once $view_path;