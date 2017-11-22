<?php
namespace App\Controllers;

class Controller {
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function render(\Slim\Http\Response $response, $file, $params = []){
        return $this->container->view->render($response, $file, $params);
    }

    public function redirect(\Slim\Http\Response $response, $routeName = '/', $status = 302, $params = []){
        return $response->withStatus($status)->withHeader('Location', $this->router->pathFor($routeName, $params));
    }

    public function __get($name) {
        return $this->container->get($name);
    }

}