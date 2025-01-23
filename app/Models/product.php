<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'image'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
