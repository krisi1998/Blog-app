@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel app from scratch.</p>
        <p>
            <a class="btn btn-lg btn-primary" href="/login">Login</a>
            <a class="btn btn-lg btn-success" href="/register">Register</a>
        </p>
    </div>
@endsection
