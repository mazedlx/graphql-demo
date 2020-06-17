<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $guarded = [];

    public function author(): BelongsTo
    {
        return $this->belongsto(User::class, 'user_id', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
