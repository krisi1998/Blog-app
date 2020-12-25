@extends('layouts.app')

@section('content')
<div class="container register-form mt-3">
    <form class="form" action="{{ route('register') }}" method="post">
        <div class="note">
            <p>Register</p>
        </div>
        @csrf
        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *" value="{{ old('name') }}"/>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
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
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            <button type="submit" class="btnSubmit">Register</button>
        </div>
    </form>
</div>
@endsection
