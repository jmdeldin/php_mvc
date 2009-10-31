<?php
/**
 * Application settings.
 */
define('ROOT', dirname(dirname(__FILE__))); // path to the site (not web-root)
define('APP_ROOT', ROOT . '/app');          // path to the "app" directory

/**
 * Run the application.
 */
require APP_ROOT . '/bootstrap.php';

$router = new Router();
$router->delegate();

