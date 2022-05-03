<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'price',
        'description',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
