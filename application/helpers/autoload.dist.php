<?php
define("JASPERCLIENT_ROOT", APPPATH.'helpers/');

spl_autoload_register(function($class) {
$location = JASPERCLIENT_ROOT . $class . '.php';

if(!is_readable($location)) return;

require_once $location;
});

?>