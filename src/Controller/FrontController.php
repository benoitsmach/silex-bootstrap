<?php

namespace Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FrontController
{
  public function indexAction(Application $app) {
  	$response = $app->render('index.html.twig');
  	return $response;
  }
}

