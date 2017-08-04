@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h2>Register</h2>

        <form action="/register" method="post">
            @include('layouts.errors')
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password">
            </div>

            <input type="submit" value="Register" class="btn btn-default">
        </form>

    </div>

@stop