<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \App\Traits\IsTraceable;

class Product extends Model
{
    use IsTraceable;
//   protected $connection = 'mongodb';

}