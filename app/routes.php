<?php


$app->group('', function() use ($container) {
    
    $this->get('/', \App\Controllers\Home\HomeController::class . ':home')->setName('home');
    $this->get('', \App\Controllers\Home\HomeController::class . ':home');    
    
	$this->get('/nature', \App\Controllers\Home\HomeController::class . ':nature')->setName('nature');
	$this->get('/histoire', \App\Controllers\Home\HomeController::class . ':histoire')->setName('histoire');
	$this->get('/grandes_villes', \App\Controllers\Home\HomeController::class . ':grandes_villes')->setName('grandes_villes');
	$this->get('/activites', \App\Controllers\Home\HomeController::class . ':activites')->setName('activites');
	$this->get('/culinaire', \App\Controllers\Home\HomeController::class . ':culinaire')->setName('culinaire');

});


