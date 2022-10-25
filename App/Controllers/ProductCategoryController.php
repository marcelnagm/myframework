<?php

namespace App\Controllers;

use App\Controllers\BaseController,
    App\Controllers\CRUDController
,    App\Models\ProductCategory,
    Symfony\Component\HttpFoundation\Request;

class ProductCategoryController extends CRUDController {

    protected $model = 'App\Models\ProductCategory';

}
