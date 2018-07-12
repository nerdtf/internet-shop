<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'slug', 'price', 'description' , 'image'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
