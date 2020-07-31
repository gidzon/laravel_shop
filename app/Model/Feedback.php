<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['rating', 'text', 'product_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
