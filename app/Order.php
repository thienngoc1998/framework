<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['name','email','phone','address','total','note','qty','status','delivery','id_product'];
    protected $dates = ['created_at','updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class,'id_product');
    }
}
