<?php

date_default_timezone_set('Europe/Paris');

// silex core
require_once __DIR__ . '/../vendor/autoload.php';

// common config 
require_once __DIR__ . '/../config/common.php';

// environement config (DBs ...)
require_once __DIR__ . '/../config/' . 'local' . '.php';

// init app
require_once __DIR__ . '/../src/app.php';
