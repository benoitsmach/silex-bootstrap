<?php

class MyApplication extends \Silex\Application
{
	use \Silex\Application\TwigTrait;
}

$app = new MyApplication();

$app['config'] 	= $config;
$app['debug'] 	= $config['debug'];

/*
 * Init Twig
 */ 
$app->register(new Silex\Provider\TwigServiceProvider(), array(
  'twig.options' 	=> $config['twig.options'],
  'twig.path' 		=> $config['twig.path']
));

/*
 * Init base de données
 */ 
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
	'db.options' => $config['db.options'])
);