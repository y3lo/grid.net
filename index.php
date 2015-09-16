<?php

include_once 'core/Core.php';

spl_autoload_register(array('Autoloader','core_autoload'));
spl_autoload_register(array('Autoloader','autoload'));

$data = [
	'index.php'=>'Главная страница',
	'signup.php'=>'Sign Up',
	'signin.php'=>'Sign In'
];