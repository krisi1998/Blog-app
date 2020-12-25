<div class="container mb-4">
    <div class="row">
        <p>
            By: <a href="{{ route('user.posts',$post->user) }}">{{ $post->user->name }}</a>
             - <span>{{ $post->created_at->diffForHumans() }}</span>
        </p>
        <p>
            {{ $post->body }}
        </p>
    </div>
    <div class="row">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.like', $post) }}" method="post" class="from">
                    @csrf
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success m-2 my-sm-0">Like</button>
                    </div>
                </form>
            @else
                <form action="{{ route('posts.like', $post) }}" method="post" class="form">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-warning m-2 my-sm-0">Unlike</button>
                    </div>
                </form>
            @endif
            @if ($post->ownedBy(auth()->user()))
                <form action="{{ route('posts.destroy', $post) }}" method="post" class="form">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-danger m-2 my-sm-0">Delete</button>
                    </div>
                </form>
            @endif
        @endauth
        <span class="py-auto">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
</div>
