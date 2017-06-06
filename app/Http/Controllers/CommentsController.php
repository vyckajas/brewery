<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required|min:2']);
        Comment::create([
           'body' => request('body'),
            'user_id' => Auth()->user()->id,
            'post_id' => $post->id
        ]);
        return back()->with(['message' => 'Comment added successfully']);
    }
}
