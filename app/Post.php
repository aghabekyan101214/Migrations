<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function heading()
    {
        return $this->hasOne('App\Heading');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
