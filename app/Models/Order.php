<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'note',
        'cart',
        'user_id'
    ];
    protected $casts = [
        'cart' => 'json',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
