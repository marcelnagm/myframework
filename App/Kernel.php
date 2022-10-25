<?php

namespace App;

use App\Router;

class Kernel {

    static function start() {
        $uri =  $_SERVER['REQUEST_URI'];
        $router = new Router();
        $router->resolve($uri);
    }

}
