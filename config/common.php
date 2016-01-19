<?php
/* 
 * Common config across environments
 */ 

$config = [
	'debug' => true,

	// Doctrine options http://silex.sensiolabs.org/doc/providers/doctrine.html
	'db.options' => array(
		'dbname'  	=> 'PROJECT_DB',
		'host'   		=> 'localhost',
		'driver'  	=> 'pdo_mysql',
		'charset'		=> 'utf8',
		'user'			=> 'my_user',
		'password'	=> 'my_password'
	),

	// Twig options http://silex.sensiolabs.org/doc/providers/twig.html
	'twig.path' 	 => __DIR__ . '/../views',
	'twig.options' => array(
		'strict_variables' => true,
		'cache' 					 => __DIR__ . '/../cache/twig'
	)

];

