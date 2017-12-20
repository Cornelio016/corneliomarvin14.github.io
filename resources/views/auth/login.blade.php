@extends('auth.layout')


@section('content')

    

    
        <div class="card card-container">
             

            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
           <!--  <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method ="POST" action="/auth/login">
            {!! csrf_field() !!}
                @if (Session::has('Failed'))
                    <div class = "alert alert-warning">
                        <div class = 'text-warning'>
                            {{Session::get('Failed')}}
                        </div>
                    </div>
                @endif
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email address" required autofocus >
                <input type="password" id="password" class="form-control" placeholder="Password" required name="password">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name = "remember" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <!-- <a href="/password/email" class="forgot-password">
                Forgot the password?
            </a>
        </div> /card-container
 -->    



@endsection