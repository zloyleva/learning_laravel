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

            @include('layouts.errors')

            <form method="post" action="/posts/{{$post->id}}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Enter your comment here"></textarea>
                </div>
                <input type="submit" value="Add comment" class="btn btn-default">
            </form>

        </div>

    </div><!-- /.blog-main -->

@stop