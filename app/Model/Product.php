<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'desc', 'img', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
