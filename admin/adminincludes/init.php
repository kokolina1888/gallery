<?php 
//D:\xampp\htdocs\UDEMY\gallery
//D:\xampp\htdocs\UDEMY\gallery\admin\images

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', 'D:' . DS . 'xampp' . DS . 'htdocs' . DS . 'UDEMY' . DS . 'gallery');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'adminincludes');

require_once('function.php');
require_once('new_config.php');
require_once('database.php');
require_once('db_object.php');
require_once('user.php');
require_once('photo.php');
require_once('sessions.php');


?>