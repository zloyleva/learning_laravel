@extends('layouts.master')

@section('content')

    <h1>Show tasks</h1>

    <ul>
    @foreach($tasks as $task)
        <li><a href="/tasks/{{$task->id}}">{{$task->body}}</a></li>
    @endforeach
    </ul>

@endsection

@section('sidebar')

    <h4>News</h4>

@endsection
