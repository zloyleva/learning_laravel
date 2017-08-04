<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post){
        // It's a first method for added comment to post
//        $comment = new Comment;
//        $comment->body = request('body');
//        $post->comments()->save($comment);

        // It's second method for added comment to post
        Comment::create(array(
                'body'  =>  request('body'),
                'post_id'   =>  $post->id
        ));

        return back();
    }
}
