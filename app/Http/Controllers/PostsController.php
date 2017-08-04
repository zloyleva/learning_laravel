<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    // Show page where located post's form
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $this->validate(request(),[
          'title'   => 'required|min:3',
          'body'   => 'required|min:10'
        ]);

        $args = array(
            'title' => request('title'),
            'body'  => request('body'),
            'user_id'   => auth()->id()
        );

        Post::create($args);

        return redirect('/');
    }
}
