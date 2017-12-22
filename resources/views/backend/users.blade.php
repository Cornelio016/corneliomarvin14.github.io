@extends('backend.layout')
@section('content')

<style>
  .font{
      margin-left: 250px; 
      margin-top: -90px;
      font-family: "Comic Sans MS", cursive, sans-serif;
      font-size: 60px;
     
    }
</style>


       <img src="{{URL::asset('img/17.png')}}" style="  border-radius: 50%; height: 100px; margin-top: 30px; margin-left: 20px;">.

    
  
  <div class="font">
    Senses Your Salon And Spa
  </div>
  <br><br>
  <div id="content">
    @if(Session::has('message'))
    {{ Session::get('message') }}
    @endif
  	<table class="table">
  		
  		<tr>
    	  <th>id</th>
    	  <th>User's Name</th>
        <th>Email Address</th> 
    	  <th>Branch Location</th>
        <th>Action</th>
    		</tr>

    		@foreach($user as $userss)
    		<tr>
    			<td>{{ $userss->id }}</td>
    			<td>{{ $userss->name }}</td>
    			<td>{{ $userss->email }}</td>
    			<td>{{ $userss->branch }}</td>
          <td><a href="" data-toggle="modal" data-target="#{{ $userss->id }}">Change Password</a></td>

     

             </div><div id="{{ $userss->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                      <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/users/okna" method="post">
                    {{ csrf_field() }}
                         <input type="hidden" name="NEW" value="{{ $userss->id }}">
                        <div class="form-group">
                          <label for="usrname"><span ></span>Email Address</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Old Password</label>
                          <input type="text" class="form-control" id="psw" placeholder="Old Password" name="oldpassword">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>New Password</label>
                          <input type="text" class="form-control" id="psw" placeholder="New Password" name="Newpass">
                        </div>

                          <div class="form-group">
                          <label for="psw"><span ></span>Confirm Password</label>
                          <input type="text" class="form-control" id="psw" placeholder="confirm Password" name="Conpass">
                        </div>
                 
                 
                        
                       
                          <button class="btn btn-success btn-block" > Save</button>
                          <br>
               
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
              </div>
    		</tr>
    		@endforeach
        <br><br>
    		<div  style="margin-left: 20px; margin-top: -30px;" >
			            <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal">Add Users</a>
                  <br><br><br>
                         
                  </div><div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Users Table</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/users" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname"><span ></span> User's Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="User's Name" name="usersname"  required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span ></span>Email Address</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Email Address" name="email"  required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Password</label>
                          <input type="text" class="form-control" id="psw" placeholder="Password" name="password"  required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Confirm Password</label>
                          <input type="text" class="form-control" id="psw" placeholder="Confirm Password" name="conpass"  required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Branch Location</label>
                          <input type="text" class="form-control" id="psw" placeholder="Branch Location" name="blocation"  required data-validation-required-message="Plss Endter Category Name.">
                        
                       <br><br>
                          <button class="btn btn-success btn-block" > Save</button>
                          <br>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                </div>
			           
			      </div>

  	</table>
  </div>

@stop