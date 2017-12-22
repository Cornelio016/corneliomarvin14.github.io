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
  		 <div>
			      <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal">Add New Categories</a>

			    <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Service_and_Category" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname"><span></span>Category Name:</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="id" required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                          <button class="btn btn-success btn-block" > Save</button>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
                </div>
		  </div>
		  <div>
		  	 <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal1" style="margin-left: 200px; margin-top: -60px;">Add New Service</a>

		  	    <div id="myModal1" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Service</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Service_and_Category/service" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="psw">Category Name</label>
                          <select class="form-control" name="name" >
                          @foreach($cats as $service)
                          
                            <option >{{ $service->categoryname }}</option>
                            

                          @endforeach
                          </select>

                        </div>

                         <div class="form-group">
                          <label for="psw">Service Name:</label>
                          <input type="text" class="form-control" id="psw" placeholder="Service Name" name="Snames" required data-validation-required-message="Plss Endter Category Name.">
                        </div>
                         <div class="form-group">
                          <label for="psw">Price:</label>
                          <input type="text" class="form-control" id="psw" placeholder="Price" name="Pnames" required data-validation-required-message="Plss Endter Category Name.">
                        </div>

                          <button class="btn btn-success btn-block" > Save</button>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
                </div>
		  </div>
		  <br>
                @if ($srch->count() == 0)
                    <div class = "alert alert-danger">
                        <div class = 'text-warning'>
                            Item Not Found
                        </div>
                    </div>
                @endif
      <form action="/admin/Service_and_Category" method="GET" style="margin-top: -70px; margin-left: 400px;">
          <input id="search" name="Ser" type="text" placeholder="Search Here">
          <input id="submit" type="submit" value="Search">
      </form>
   <div class="primary" style="margin-left: 400px; font-size: 10px;" >
   	<p></p>
   </div>
      <br><br>
  	<table class="table">
  		<tr>
  			<th>Category</th>
  			<th>Service Name</th>
  			<th>Price</th>
        <th>Action</th>
  		</tr>
  	@foreach($srch as $service1)
  	<tr>
  		<td>{{ $service1->category }}</td>
  		<td>{{ $service1->servicename }}</td>
  		<td>₱ {{ $service1->price }}</td>
      <td><a href="{{ URL::to('DELETESSS', array($service1->id )) }}">Delete</a><a href=""  data-toggle="modal" data-target="#{{ $service1->id }}">     Update</a></td>

      <div id="{{ $service1->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                      <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Service</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/updateser" method = "post">
                        {{ csrf_field() }}
                         <input type="hidden" name="updatesers" value="{{ $service1->id }}">
                        <div class="form-group">
                          <label for="psw">Category Name</label>
                          <select class="form-control" name="name" >
                          @foreach($cats as $service)
                          
                            <option value="{{ $service1->category }}">{{ $service->categoryname }}</option>
                            

                          @endforeach
                          </select>

                        </div>

                         <div class="form-group">
                          <label for="psw">Service Name:</label>
                          <input type="text" class="form-control" id="psw" placeholder="Service Name" name="Snames" required data-validation-required-message="Plss Endter Category Name." value="{{ $service1->servicename }}">
                        </div>
                         <div class="form-group">
                          <label for="psw">Price:</label>
                          <input type="text" class="form-control" id="psw" placeholder="Price" name="Pnames" required data-validation-required-message="Plss Endter Category Name." value="{{ $service1->price }}">
                        </div>

                          <button class="btn btn-success btn-block" > Save</button>
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
  	</table>

  </div>
@stop