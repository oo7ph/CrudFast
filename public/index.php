<?php
// turn debugging on
ini_set("display_errors",1);
error_reporting(E_ALL|E_STRICT);
date_default_timezone_set('MST');

// auto-include
set_include_path(get_include_path() . PATH_SEPARATOR . "../secure/libs");
set_include_path(get_include_path() . PATH_SEPARATOR . "../secure/models");
require_once 'Slim/Slim.php';
require_once 'idiorm.php';
require_once '../secure/config.php';
\Slim\Slim::registerAutoloader();


// Setup DB
ORM::configure('mysql:host='.DATABASE_SERVER.';port='.DATABASE_PORT.';dbname='.DATABASE_NAME);
ORM::configure('username', DATABASE_USER);
ORM::configure('password', DATABASE_PASS);

\Slim\Route::setDefaultConditions(array(
  'id' => '[0-9]*',
  'parentId' => '[0-9]{1,}'
));

$app = new \Slim\Slim(array(
	'templates.path' => '../secure/Views',
	'cookies.secret_key' => 'IkMHwZssJVe7XgdznBby'
));

// AutoLoad Controller Routes
foreach (glob("../secure/controllers/*.php") as $filename)
{
    require_once $filename;
}


$app->run();