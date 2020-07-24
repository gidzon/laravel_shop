<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Cart extends Model
{
    protected $totalAmount = [];
    protected $fillable = [
        'name_product',
        'price',
        'product_summ',
        'amount',
    ];

    public function getTotalAmount($summ)
    {
        foreach($summ as $value) {
            if(Arr::has($this->totalAmount, 'product_summ')) {
                $this->totalAmount['product_summ'] = $this->totalAmount['product_summ'] + $value;
            } else {
                $this->totalAmount['product_summ'] = $value;
            }
        }

        return $this->totalAmount;
    }
}
