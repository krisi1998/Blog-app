@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
            <div class="jumbotron text-center mt-3">
                <h4>Sign in or Register to post.</h4>
                <p>
                    <a class="btn btn-lg btn-primary" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-lg btn-success" href="{{ route('register') }}">Register</a>
                </p>
            </div>
        @endguest
        @auth
            <div class="jumbotron text-center mt-3 p-4">
                <form action="{{ route('posts') }}" method="post" class="form">
                    @csrf
                    <div class="form-group">
                        <label for="body">New post</label>
                        <textarea name="body" id="body" cols="30" rows="4"
                        class="form-control @error('body') @enderror"
                        placeholder="Post something!"></textarea>
                    </div>

                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="btnSubmit">Post</button>
                </form>
            </div>
        @endauth
        @if ($posts->count())
            <div class="jumbotron text-left mt-3">
                @foreach ($posts as $post)
                    @include('inc.posts')
                @endforeach
            </div>
            <div class="row">
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-center">There are no posts.</p>
        @endif
    </div>
@endsection
