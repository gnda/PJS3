<?php

$container['debug'] = function () {
    return true;
};

$container['config'] = function(){
    return require '../app/settings.php';
};

$container['view'] = function ($container){

    $dir = dirname(__DIR__);

    $view = new \Slim\Views\Twig($dir . '/app/Views', [
        'cache' => $container->debug ? false : $dir . '/tmp/cache',
        'debug' => $container->debug
    ]);

    if($container->debug)
        $view->addExtension(new Twig_Extension_Debug());

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};
