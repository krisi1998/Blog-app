@extends('layouts.app')

@section('content')
<div class="container register-form mt-3">
    <form class="form" action="{{ route('login') }}" method="post">
        <div class="note">
            <p>Login</p>
        </div>
        @csrf
        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email *" value="{{ old('email') }}"/>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password *" value=""/>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    @if (session()->has('status'))
                        <p class="text-danger">{{ session('status') }}</p>
                    @endif
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btnSubmit">Login</button>
        </div>
    </form>
</div>
@endsection
