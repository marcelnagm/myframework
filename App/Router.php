<?php

namespace App;

use App\Controller\HomeController;
use App\Controller\BaseController;


class Router{
    
    private $routes;
    
    public function __construct() {
     $this->routes = include('Routes/routes.php');       
    }
    
    
    public function resolve($url) {
//        echo 'in';
//        Debuger::dd($this->routes);
        foreach ($this->routes as $route => $controller){
            if($route == $url){
                
                echo $route;
               return  $this->call($controller);
            }
        }
        die('Rota nao encontrada');
    }
    
    public function call($controller) {
     $actions = explode('@', $controller) ;
     
//     new HomeController()->index();
     $control = new $actions[0]();
     $method = $actions[1];
     $control->$method();

    }
    
}