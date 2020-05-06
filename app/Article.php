<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        "title",
        "description",
        "img",
        "content",
        "id_user",
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
