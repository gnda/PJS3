<?php


$app->group('', function() use ($container) {
    
    $this->get('/', \App\Controllers\Home\HomeController::class . ':home')->setName('home');
    $this->get('', \App\Controllers\Home\HomeController::class . ':home');    
    
	$this->get('/nature', \App\Controllers\Home\HomeController::class . ':nature')->setName('nature');
	$this->get('/culinaire', \App\Controllers\Home\HomeController::class . ':culinaire');
	$this->get('/activites', \App\Controllers\Home\HomeController::class . ':activites')->setName('activites');
	//$this->get('/page', \App\Controllers\Home\HomeController::class . ':page')->setName('page');
});


