<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product,\App\Traits\HasProduct,\App\Traits\IsTraceable;


class ProductItem extends Model {

    use HasProduct,IsTraceable;
    
    protected $table = 'product_item';
    static $rules = [
        'product_id' => 'required',
        'type' => 'required',
        'quantity' => 'required'
    ];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'type',
        'quantity'
    ];

    
 
    
}
