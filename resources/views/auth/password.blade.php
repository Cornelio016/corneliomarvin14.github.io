@extends('auth.layout')

<!-- @section('title', '| Forgot my Password') -->

@section('content') 
<center>
<div class = "card card-container">

	<form method="POST" action="/password/email" class = "form-inline">
	    {!! csrf_field() !!}
	   <h1 class = "glyphicon glyphicon-lock" style	 = "font-size:100px"></h1>
	    <h3 class = "text-center">Forgot Password?</h3>
	    <hr>
	    
		    @if (count($errors) > 0)
		    <div class = "alert alert-warning">
		        
		            @foreach ($errors->all() as $error)
		                {{ $error }}
		            @endforeach
		        
		    </div>
		    @endif
		
	    <div>
	        
	        <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                <input id="email" name="email" value="{{ old('email') }}" placeholder="email address" class="form-control"  type="email">
            </div>
	    </div>
	    <br />
	    <center>
		    <div>
		        <button type="submit" class= "btn btn-primary">
		            Send Password Reset Link
		        </button>
		    </div>
		</center>
	</form>


</div>		
</center>
@endsection