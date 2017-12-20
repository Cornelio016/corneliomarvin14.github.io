@extends('auth.layout')

<!-- @section('title', '| Forgot my Password') -->

@section('content')
<!-- resources/views/auth/reset.blade.php -->


<div class = "card card-container">
    <form method="POST" action="/password/reset">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">

        <h3 class = "text-center">Password Reset Form</h3>
        <hr>

        @if (count($errors) > 0)
            
                @foreach ($errors->all() as $error)
                <div class = "alert alert-warning">
                    {{ $error }}
                </div>
                @endforeach
            
        @endif

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}" class = "form-control">
        </div>

        <div>
            Password
            <input type="password" name="password" class = "form-control">
        </div>

        <div>
            Confirm Password
            <input type="password" name="password_confirmation" class = "form-control">
        </div>

        <div>
            <br />
            <center>
                <button type="submit" class = "btn btn-primary">
                    Reset Password
                </button>
            </center>
        </div>
    </form>
</div>


@endsection