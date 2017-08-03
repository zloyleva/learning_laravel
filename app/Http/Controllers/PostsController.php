<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);
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

        Post::create(request(['title', 'body']));

        return redirect('/');
    }
}
