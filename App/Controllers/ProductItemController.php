<?php

namespace App\Controllers;

use App\Controllers\BaseController,
    App\Controllers\CRUDController
,    App\Models\ProductItem,
    Symfony\Component\HttpFoundation\Request;

class ProductItemController extends CRUDController {

    protected $model = 'App\Models\ProductItem';

}
