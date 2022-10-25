<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory,
    App\Models\ProductItem,\App\Traits\IsTraceable;

class Product extends Model {

    use IsTraceable;
    protected $table = 'product';
    static $rules = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'SKU' => 'required',
    ];
    protected $perPage = 5;
    
    static $onpage = 5;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'SKU'];

  

    function categories() {
        return ProductCategory::where('product_id', $this->id);
    }

    function items() {
        return ProductItem::where('product_id', $this->id);
    }

    public function toArray() {
        $data = parent::toArray();
        unset($data['created_at']);
        unset($data['updated_at']);
        $data['categories'] = $this->categories()->get();
        $data['items'] = $this->items()->get();
        return $data;
    }

}
