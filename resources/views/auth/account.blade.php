@extends('auth.layout')

@section('content')
<form method="POST" action="/change">
    {!! csrf_field() !!}

  

    <div>
        Old Password
        <input type="password" name="password" value="{{ old('password') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
@endsection