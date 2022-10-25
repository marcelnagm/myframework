<?php

return [
//    'path' => 'Controller',
    'get@/index' => 'App\Controllers\HomeController@index',
    'get@/product' => 'App\Controllers\ProductController@index',
    'get@/product/show' => 'App\Controllers\ProductController@show',
    'post@/product/add' => 'App\Controllers\ProductController@store',
    'put@/product/update' => 'App\Controllers\ProductController@update',
    'delete@/product/delete' => 'App\Controllers\ProductController@delete',
    
    'get@/category' => 'App\Controllers\CategoryController@index',
    'post@/category/add' => 'App\Controllers\CategoryController@store',
    'put@/category/update' => 'App\Controllers\CategoryController@update',
    'delete@/category/delete' => 'App\Controllers\CategoryController@delete',
    
   
    'post@/product_category/add' => 'App\Controllers\ProductCategoryController@store',    
    'delete@/product_category/delete' => 'App\Controllers\ProductCategoryController@delete',
    
   
    'post@/product_item/add' => 'App\Controllers\ProductItemController@store',    
    'delete@/product_item/delete' => 'App\Controllers\ProductItemController@delete',
    
];
