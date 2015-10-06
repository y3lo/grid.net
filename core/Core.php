<?php

/**
 * Created by PhpStorm.
 * User: fr37h
 * Date: 16.09.2015
 * Time: 17:26
 */
const CLASS_PATH = 'app/classes';
const MODULES_PATH = 'app/modules';
const VIEWS_PATH = 'app/views';
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_DBNAME = 'grid.net';
const PJ_NAME = 'grid.net';
const PJ_URL = 'http://grid.net/';

$display_error = false;
$default_timezone = 'Europe/Kiev';
$error_reporting = false;

ini_set('display_errors',$display_error);
error_reporting($error_reporting);

date_default_timezone_set($default_timezone);