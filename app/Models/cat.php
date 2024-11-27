<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    protected $fillable = [
        'name',
        'fav_food',
        'breed',
        'age',
        'image',
    ];
}
