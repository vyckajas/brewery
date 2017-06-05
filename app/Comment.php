<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id', 'post_id'];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

    public function user() //$comment->user->name;
    {
        return $this->belongsTo(User::class);
    }
}
