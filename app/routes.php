<?php


$app->group('', function() use ($container) {
    
    $this->get('/', \App\Controllers\Home\HomeController::class . ':home')->setName('home');
    $this->get('', \App\Controllers\Home\HomeController::class . ':home');


    $this->get('/nature', \App\Controllers\Home\HomeController::class . ':nature');

});


