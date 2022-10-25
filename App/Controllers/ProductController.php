<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Controllers\CRUDController,
    App\Models\Product;

class ProductController extends CRUDController {

     protected $model = 'App\Models\Product';


}
