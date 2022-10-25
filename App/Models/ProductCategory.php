<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Traits\HasProduct,
    \App\Traits\IsTraceable;

class ProductCategory extends Model {

    use HasProduct,
        IsTraceable;

    protected $table = 'product_category';
    static $rules = [
        'product_id' => 'required',
        'category_id' => 'required',
    ];
    protected $perPage = 20;
    
    static $onpage = 1;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'category_id'
    ];

    public function __toString(): string {
        return Category::find($this->category_id);
    }
   
    public function toArray() {
        return [$this->category_id];
    }
}
