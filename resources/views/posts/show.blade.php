@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        @include('posts.post', compact('post'))

    </div><!-- /.blog-main -->

@stop