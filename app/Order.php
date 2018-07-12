<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['customer_name','email','phone','comment'];


    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('amount');
    }

}
