@extends('layouts.app')

@section('content')
    <div class="col">
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
        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="container">
                    <a href="">{{ $post->user->name }}</a>
                    <span>{{ $post->created_at->diffForHumans() }}</span>
                    <p>{{ $post->body }}</p>
                </div>
            @endforeach
            <div class="row">
                {{ $posts->links() }}
            </div>
        @else
            <p>There are no posts.</p>
        @endif
    </div>
@endsection