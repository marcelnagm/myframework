<?php

namespace App\Controllers;

use App\Controllers\BaseController,
App\Models\Product;
    

class HomeController extends BaseController {

    public function index() {
        foreach (Product::all() as $p) {
            echo $p;
        }
    }

}
