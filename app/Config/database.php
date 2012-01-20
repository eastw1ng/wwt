<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/Database/Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'vertrigo',
		'database' => 'wwt',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'port' => 3306,
		'login' => 'root',
		'password' => '',
		'database' => 'wwt',
	);
}
