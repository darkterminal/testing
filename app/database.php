<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$caps = new Capsule();

$caps->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'username' => 'root',
	'password' => '',
	'database' => 'mvc',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);

$caps->bootEloquent();