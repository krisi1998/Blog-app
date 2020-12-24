<div class="container">
    <a href="{{ route('user.posts',$post->user) }}">{{ $post->user->name }}</a>
    <span>{{ $post->created_at->diffForHumans() }}</span>
    <p>{{ $post->body }}</p>
</div>
@auth
    @if (!$post->likedBy(auth()->user()))
        <form action="{{ route('posts.like', $post) }}" method="post" class="">
            @csrf
            <div class="form-group">
                <button type="submit" class="btmSubmit">Like</button>
            </div>
        </form>
    @else
        <form action="{{ route('posts.like', $post) }}" method="post" class="">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <button type="submit" class="btmSubmit">Unlike</button>
            </div>
        </form>
    @endif
    @if ($post->ownedBy(auth()->user()))
        <form action="{{ route('posts.destroy', $post) }}" method="post" class="">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <button type="submit" class="btmSubmit">Delete</button>
            </div>
        </form>
    @endif
@endauth
<span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
