<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['content','id_user','id_product'];
    protected $dates = ['created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'id_product');
    }
}
