<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','description','amount','price','sale','content','color','size','img','new','id_category'];
    protected $dates = ['created_at','updated_at'];
}
