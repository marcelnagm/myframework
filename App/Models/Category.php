<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Traits\IsTraceable;

class Category extends Model {

    use IsTraceable;

//   protected $connection = 'mongodb';
    protected $table = 'category';
    static $rules = [
        'name' => 'required',
        'parent_id' => 'required',
    ];
    protected $fillable = [
        'name',
        'parent_id'
    ];
    protected $perPage = 5;
    static $onpage = 1;

}
