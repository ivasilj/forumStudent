<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Thread;
use App\User;

class Comment extends Model
{
    protected $fillable = ['body', 'thread_id'];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
