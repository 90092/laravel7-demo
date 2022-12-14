<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'price', 'discount', 'stock', 'categories', 'detail', 'images'
    ];
}
