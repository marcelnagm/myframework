<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

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
        'name'    ,
        'price',
        'description',
        'SKU'];
    
    

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $user = auth()->guard('api')->user();
            if ($user != null) {
                $model->created_by = $user->id;
                $model->user_id = $user->id;
                $model->updated_by = $user->id;
            }
        });
        static::updating(function ($model) {
            $user = auth()->guard('api')->user();
            if ($user != null) {
                $model->updated_by = $user->id;
            }
        });
        
        
    }

    
    
    
}
