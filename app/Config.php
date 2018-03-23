<?php
namespace app;
/**
* config plugin
*/
class Config
{
	
/**
* database connections
*/
public function db(){
	$config = new \Doctrine\DBAL\Configuration();
	$connectionParams = array(
		'dbname' => DB_NAME,
		'user' => DB_USER,
		'password' => DB_PASSWORD,
		'host' => DB_HOST,
		'driver' => 'mysqli',
	);
	return \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
}

}
?>