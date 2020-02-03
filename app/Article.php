<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user()
    {
        return $this->belongsto(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
