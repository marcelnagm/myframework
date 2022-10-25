<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\HasProduct,\App\Traits\IsTraceable;

class ProductCategory extends Model {

    use HasProduct,IsTraceable;
    
    protected $table = 'product_category';
    static $rules = [
        'product_id' => 'required',
        'category_id' => 'required',        
    ];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
         'product_id',
        'category_id' 
        ];
    
    

 

    
    
    
}
