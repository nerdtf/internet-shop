<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'intro', 'content'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        Comment::create([
            'body' => $body,
            'page_id' => $this->id
        ]);
    }
}
