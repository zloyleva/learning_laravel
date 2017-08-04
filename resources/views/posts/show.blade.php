@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        @include('posts.post', compact('post'))

        <div class="comments">

            @foreach($post->comments as $comment)

                <blockquote>
                    <p>{{$comment->body}}</p>
                    <footer>
                        {{$comment->created_at->diffForHumans()}} by <cite title="Source Title">ZloyLeva</cite>
                    </footer>
                </blockquote>

            @endforeach

        </div>

    </div><!-- /.blog-main -->

@stop