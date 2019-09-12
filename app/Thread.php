<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Thread extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
