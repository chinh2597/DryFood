<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'url', 'description', 'code', 'price', 'image', 'category_id'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function Order_Product()
    {
        return $this->hasMany('App\Order_Product', 'order_id', 'id');
    }

    public function Category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
