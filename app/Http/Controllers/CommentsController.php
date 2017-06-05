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
//
//        auth()->user()->publish(
//            new Comment(request(['body']))
//        );

        Comment::create([
           'body' => request('body'),
            'user_id' => Auth()->user()->id,
            'post_id' => $post->id
        ]);

//        $post->addComment(request('body'));

        return back()->with(['message' => 'Comment added successfully']);
    }
}
