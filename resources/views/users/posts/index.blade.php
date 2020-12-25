@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-3">
        <h1>{{ $user->name }}</h1>
        <p>Posted {{ $posts->count() }} {{ Str::plural('time',$posts->count()) }}
        and has received {{ $user->receivedLikes->count() }}
        {{ Str::plural('like', $user->receivedLikes->count())}}.</p>
    </div>
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
        <p class="text-center">{{ $user->name}} has no posts.</p>
    @endif
@endsection
