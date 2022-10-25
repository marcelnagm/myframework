<?php

ini_set('display_errors', 1);

require 'vendor/autoload.php';

foreach (glob("config/*.php") as $filename) {

    require $filename;
}

use Illuminate\Database\Capsule\Manager as Capsule;


Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->string('userimage')->nullable();
    $table->string('api_key')->nullable()->unique();
    $table->rememberToken();
    $table->timestamps();
});

Capsule::schema()->create('product', function ($table) {
    $table->id();
    $table->string('name');
    $table->double('price');
    $table->string('description');
    $table->string('SKU')->unique();
    $table->timestamps();
    $table->unsignedBigInteger('created_by')->nullable(true);
    $table->unsignedBigInteger('updated_by')->nullable(true);
//    $table->foreign('created_by')->references('id')->on('users');
//    $table->foreign('updated_by')->references('id')->on('users');
});

Capsule::schema()->create('product_item', function ($table) {
    $table->id();
    $table->unsignedBigInteger('product_id')->nullable(true);    
    $table->string('type');
    $table->integer('quantity');
    $table->timestamps();
    $table->unsignedBigInteger('created_by')->nullable(true);
    $table->unsignedBigInteger('updated_by')->nullable(true);
//    $table->foreign('created_by')->references('id')->on('users');
//    $table->foreign('updated_by')->references('id')->on('users');
});
Capsule::schema()->create('product_category', function ($table) {
    $table->id();
    $table->unsignedBigInteger('product_id')->nullable(true);    
    $table->unsignedBigInteger('category_id')->nullable(true);    
    $table->timestamps();
    $table->unsignedBigInteger('created_by')->nullable(true);
    $table->unsignedBigInteger('updated_by')->nullable(true);
//    $table->foreign('created_by')->references('id')->on('users');
//    $table->foreign('updated_by')->references('id')->on('users');
});

Capsule::schema()->create('category', function ($table) {
    $table->id();
    $table->string('name')->unique();
    $table->unsignedBigInteger('parent_id')->nullable(true);
    $table->timestamps();
    $table->unsignedInteger('created_by')->nullable(true);
    $table->unsignedBigInteger('updated_by')->nullable(true);
//    $table->foreign('created_by')->references('id')->on('users');
//    $table->foreign('updated_by')->references('id')->on('users');
});

