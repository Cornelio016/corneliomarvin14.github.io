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
          @if ($srch->count() == 0)
                    <div class = "alert alert-danger">
                        <div class = 'text-warning'>
                            Item Not Found
                        </div>
                    </div>
                @endif
         <form action="/admin/Staff" method="GET">
          <input id="search"  name="srchstaff" type="text" placeholder="Search Here">
          <input id="submit" type="submit" value="Search" >
      </form>


    	<table class = "table" >
    		<tr>
    			
    			<th>Name</th>
          <th>Email</th>
          <th>Cellphone Number</th>
    			<th>Address</th>
          <th>Postion</th>
    			<th>Gender</th>
          <th>Branch</th>
          <th>action</th>
    		</tr>
            @foreach($srch as $staff)
    		<tr>
                  
                <td>{{ $staff->Name }}</td>
                <td>{{ $staff->Email }}</td>
                <td>{{ $staff->Cellphone_NO }}</td>
                <td>{{ $staff->Address }}</td>
                <td>{{ $staff->postion }}</td>
                <td>{{ $staff->Gender }}</td>
                <td>{{ $staff->blocation }}</td>
                <td><a href="" data-toggle="modal" data-target="#{{ $staff->id }}">Update</a><A HREF="{{ URL::to('/admin/archivelist', array($staff->id)) }}">   Archive</A></td>
                  <div id="{{ $staff->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Staff</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/staffupdate" method = "post">
                        {{ csrf_field() }}
                        <input type="hidden" name="bahalaka" value="{{ $staff->id }}">
                        <div class="form-group">
                          <label for="usrname"><span class="fa fa-user-plus"></span> Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="name" value="{{ $staff->Name }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-envelope "></span>Email</label>
                          <input type="Email" class="form-control" id="psw" placeholder="Email" name="Email" value="{{ $staff->Email }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-mobile "></span>Cellphone_#</label>
                          <input type="Cell" class="form-control" id="psw" placeholder="Cp_#" name="Cell_#" value="{{ $staff->Cellphone_NO }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-location-arrow "></span>Address</label>
                          <input type="Address" class="form-control" id="psw" placeholder="Address" name="Address" value="{{ $staff->Address }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-street-view"></span>Postion</label>
                          <input type="Address" class="form-control" id="psw" placeholder="Position" name="postion" value="{{ $staff->postion }}">
                        </div>


                          <div class="form-group">
                          <label for="psw"><span class="fa fa-venus-mars"></span>Gender</label>
                          <input type="Address" class="form-control" id="psw" placeholder="Address" name="Gender" value="{{ $staff->Gender }}">
                        </div>
                        
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-map-marker"></span> Branch Location</label>
                          <select name="bloc" class="form-control"  required data-validation-required-message="Plss Endter Category Name." value="{{ $staff->blocation }}">
                                 
                                    <option value="Road 1 Main">Road 1 Main</option>
                                    <option value="Tungko">Tungko</option>
                                    <option value="Sapang Palay">Sapang Palay</option>
                                    
                          </select>
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
            </tr>
    		@endforeach
    		    	 

                        
    	
    			  <div  style="margin-left: 300px; margin-top: -30px;">
			            <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal">Add new Staff</a>
                  <br><br><br>


<!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Staff</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Staff" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname">Staff Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="name" required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="psw">Email</label>
                          <input type="Email" class="form-control" id="psw" placeholder="Email" name="Email" required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="psw">Cellphone_#</label>
                          <input type="Cell" class="form-control" id="psw" placeholder="Cp_#" name="Cell_#" required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                        <div class="form-group">
                          <label for="psw">Address</label>
                          <input type="Address" class="form-control" id="psw" placeholder="Address" name="Address" required data-validation-required-message="Plss Endter Category Name.">
                        </div>


                        <div class="form-group">
                          <label for="psw">Position</label>
                          <input type="pos" class="form-control" id="psw" placeholder="Position" name="position" required data-validation-required-message="Plss Endter Category Name.">
                        </div>

                       

                       
                          <div class="form-group">
                          <label for="psw">Gender</label>
                          <select name="Gender" class="form-control" required data-validation-required-message="Plss Endter Category Name.">
                                 
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    
                                  </select>
                          </div>
                       
                           <div class="form-group">
                          <label for="psw">Branch</label>
                          <select name="bloc" class="form-control">
                                 
                                    <option value="Road 1 ">Road 1 Main</option>
                                    <option value="Tungko ">Tungko </option>
                                    <option value="Sapang Palay ">Sapang Palay </option>
                                    
                          </select>
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
			      </div>

    	</table>
  </div>

@stop