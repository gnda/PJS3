<?php
namespace App\Controllers\Home;

use App\Controllers\Controller;
    
class HomeController extends Controller {

    public function home (\Slim\Http\Request $request, \Slim\Http\Response $response, $args){

            $this->render($response, 'pages/home.twig');
    }

    public function nature (\Slim\Http\Request $request, \Slim\Http\Response $response, $args){

            $this->render($response, 'pages/nature.twig');
    }
	
	public function histoire (\Slim\Http\Request $request, \Slim\Http\Response $response, $args){

            $this->render($response, 'pages/histoire.twig');
    }
	
	public function grandes_villes (\Slim\Http\Request $request, \Slim\Http\Response $response, $args){

            $this->render($response, 'pages/grandes_villes.twig');
    }
	
	public function activites (\Slim\Http\Request $request, \Slim\Http\Response $response, $args){

            $this->render($response, 'pages/activites.twig');
    }

    public function culinaire (\Slim\Http\Request $request, \Slim\Http\Response $response, $args){

            $this->render($response, 'pages/culinaire.twig');
    }

}