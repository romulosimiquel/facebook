<?php
require 'environment.php';

$config = array();
global $config;
if(ENVIRONMENT == 'development') {
	define("BASE", "http://localhost/facebook/");
	$config['dbname'] = 'facebook';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE", "http://localhost/facebook/");
	$config['dbname'] = 'facebook';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>