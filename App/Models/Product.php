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
        'SKU' => 'nullabe',
    ];
    protected $perPage = 20;

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
        $data['categories'] = $this->categories()->get();
        $data['items'] = $this->items()->get();
        return $data;
    }

}
