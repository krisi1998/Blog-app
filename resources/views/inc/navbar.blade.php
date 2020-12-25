<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts') }}">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
        @auth
            <ul class="navbar-nav ml-auto mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.posts',auth()->user()->name) }}">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger m-2 my-sm-0">Logout</button>
                </form>
                </li>
            </ul>
        @endauth
        @guest
            <ul class="navbar-nav ml-auto mb-md-0">
                <li class="nav-item">
                    <a class="btn btn-outline-primary m-2 my-sm-0" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-success m-2 my-sm-0" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        @endguest
        </ul>
      </div>
    </div>
</nav>
