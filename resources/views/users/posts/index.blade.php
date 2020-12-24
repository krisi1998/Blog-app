@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}</h1>
        <p>Posted {{ $posts->count() }} {{ Str::plural('post',$posts->count()) }}
        and has received {{ $user->receivedLikes->count() }}
        {{ Str::plural('like', $user->receivedLikes->count())}}.</p>
    </div>
    @if ($posts->count())
    @foreach ($posts as $post)
        @include('inc.posts')
    @endforeach
    <div class="row">
        {{ $posts->links() }}
    </div>
    @else
    <p>{{ $user->name}} has no posts.</p>
    @endif
@endsection
