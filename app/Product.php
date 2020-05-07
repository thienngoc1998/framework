<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use  SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['name','description','amount','price','sale','content','color','size','img','new','id_category','star'];
    protected $dates = ['created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }
}
