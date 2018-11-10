<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function formattedPrice()
    {
        return money_format('%i €', $this->price / 100);
    }

    public function formattedPriceWithoutSpace()
    {
        return money_format('%i€', $this->price / 100);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
