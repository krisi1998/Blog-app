@extends('layouts.app')

@section('content')
    <div class="col">
        @guest
            <h1>
                <a href="{{ route('login') }}">Sign in</a>
                or <a href="{{ route('register') }}">Register</a> to post.
            </h1>
        @endguest
        @auth
            <form action="{{ route('posts') }}" method="post" class="">
                @csrf
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                    class="form-control @error('body') @enderror"
                    placeholder="Post something!"></textarea>
                </div>

                @error('body')
                    <div class="">
                        {{ $message }}
                    </div>
                @enderror

                <button type="submit" class="btnSubmit">Post</button>
            </form>
        @endauth
        @if ($posts->count())
            @foreach ($posts as $post)
                @include('inc.posts')
            @endforeach
            <div class="row">
                {{ $posts->links() }}
            </div>
        @else
            <p>There are no posts.</p>
        @endif
    </div>
@endsection
