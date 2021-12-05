<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://estoque-mvc.lndo.site/");
	$config['dbname'] = 'lemp';
	$config['host'] = 'database';
	$config['dbuser'] = 'lemp';
	$config['dbpass'] = 'lemp';
} else {
	define("BASE_URL", "http://localhost/estoque/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);