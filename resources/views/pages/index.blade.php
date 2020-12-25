@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-3">
        <h1>Wellcome to {{env('APP_NAME')}}</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        @guest
            <p>
                <a class="btn btn-lg btn-primary" href="{{ route('login') }}">Login</a>
                <a class="btn btn-lg btn-success" href="{{ route('register') }}">Register</a>
            </p>
        @endguest
    </div>
@endsection
