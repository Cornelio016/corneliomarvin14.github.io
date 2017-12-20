@extends('backend.layout')

@section('content')

  <div id="content">

      <form action="/Customer/Search" method="GET" >
          <input id="search"  type="text" placeholder="Search Here" name="Name">
          <input id="submit" type="submit" value="Search">
      </form>
  		
  		<table class="table">
        
  			<tr>
          <th>Customer Id</th>
  				<th>Full Name</th>
  				<th>Branch Location</th>
  				<th>Action</th>
  			</tr>	
       

  			@foreach($Cus as $Customer)

  			<tr>
  				<td>{{ $Customer->id }}</td>
  				<td>{{ $Customer->name }}</td>
  				<td>{{ $Customer->branch }}</td>
          <td><a href="">Edit</a><a href="">  Delete</a></td>

  			</tr>
       
  			@endforeach
  		 		<div class = "pull-right">
			            <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal">Add new Customer</a> 
                 



<!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Customer</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/manager/Customer" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname"><span class="fa fa-user-circle-o"></span>Customer_Id</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="id">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span class="fa fa-user-circle-o"></span>Customer Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="name">
                        </div>
                        
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Email</label>
                          <input type="text" class="form-control" id="psw" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Cellphone Number</label>
                          <input type="text" class="form-control" id="psw" placeholder="Cellphone_Number" name="Cell">
                        </div>
                        <div class="form-group">
                          
                         <p>

                                <label><span ></span>Branch Location</label>
                                <br>
                                  <select name="Branch" class="form-control">
                                    <option>Location</option>
                                    <option value="Road">Road 1</option>
                                    <option value="Sapang">Sapang Palay</option>
                                    <option value="Tungko">Tungko</option>
                                  </select>

                        </p>
                        </div>

                         
                       
                          <button class="btn btn-success btn-block" > Save</button>
                    <div class="another">
                      <br>
                      <button type="submit" class="btn btn-success btn-block" data-dismiss="modal"><span class="fa fa-close"></span> Cancel</button>
                    </div>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

			      </div>
		</table>	      
  </div>
@stop