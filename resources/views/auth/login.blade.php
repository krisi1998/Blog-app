@extends('layouts.app')

@section('content')
<div class="container register-form">
    <form class="form" action="{{ route('login') }}" method="post">
        <div class="note">
            <p>Login</p>
        </div>
        @csrf
        <div class="form-content">
            <div class="row">
                @if (session()->has('status'))
                    {{ session('status') }}                  
                @endif
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email *" value="{{ old('email') }}"/>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password *" value=""/>
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                  </div>
            </div>
            <button type="submit" class="btnSubmit">Login</button>
        </div>
    </form>
</div>
@endsection