@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h3>Publish a new post</h3>

        @include('layouts.errors')

        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>



    </div>

@stop