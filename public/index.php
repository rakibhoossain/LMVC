<?php

require __DIR__.'/../vendor/autoload.php';

use App\core\Application;

$app = new Application();

$app->router->get('/', function(){
	return 'Ok';
});


$app->run();