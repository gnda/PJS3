<?php
require '../vendor/autoload.php';

session_start();

//Init
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        "database" => [
            "driver" => "mysql",
            "username" => "root",
            "password" => "root",
            "database" => "quizzlive",
            "host" => "localhost",
            "charset" => "utf8",
            "collation" => "utf8_general_ci",
            "prefix" => ""
        ]
    ]
]);

$container = $app->getContainer();


$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['database']);
$capsule->setAsGlobal();
$capsule->bootEloquent();


//Container
require '../app/container.php';

//Routes
require '../app/routes.php';

$app->run();