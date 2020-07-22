<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['name_product', 'price', 'product_summ', 'amount', 'total_amount_summ'];
}
