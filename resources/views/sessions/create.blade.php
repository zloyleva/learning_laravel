@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h2>Login</h2>
        <form action="/login" method="post">
            @include('layouts.errors')
            {{csrf_field()}}
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <input type="submit" value="Login" class="btn btn-default">
        </form>

    </div>

@stop