@extends('backend.layout')
@section('content')

  <div id="content">
        


      <form action="/admin/Products" method="GET">
          <input id="search" name="Pro" type="text" placeholder="Search Here">
          <input id="submit" type="submit" value="Search">
      </form>

    	<table class = "table" >
    		<tr>
    			<th>Products_ID</th>
    			<th>Name</th>
    			<th>Quantity</th>
    			<th>Price</th>
    			<th>Added_by</th>
          <th>Action</th>
      
    		</tr>

            @foreach($srch as $srchs)

    		<tr @if($srchs->quantity <= $srchs->Critical_Stage && $srchs->quantity > $srchs->Out_of_Stock
          ) style=" background-color: #F0AD4E" @elseif ($srchs->quantity <= $srchs->Out_of_Stock) style=" background-color: #D9534F"   @endif>
              
                
                <td>{{ $srchs->id }}</td>
                <td>{{ $srchs->proname }}</td>
                <td>{{ $srchs->quantity }}</td>
                
                <td>{{ $srchs->price }}</td>
                <td>{{ $srchs->added_by }}</td>
               
             

            
                 
                <td><a href="" data-toggle="modal" data-target="#{{ $srchs->id }}">Edit</a>
                  <a href="{{ URL::to('DELETE', array($srchs->id)) }}">  Delete</a></td>
                <div id="{{ $srchs->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Products</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/Productsupdate" method = "post">
                        {{ csrf_field() }}
                         <input type="hidden" name="Productss" value="{{ $srchs->id }}">
                        <div class="form-group">
                          <label for="usrname"><span></span> Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="name" value="{{ $srchs->name }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Quantity</label>
                          <input type="text" class="form-control" id="psw" placeholder="Quantity" name="Quan" value="{{ $srchs->quantity }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Price</label>
                          <input type="text" class="form-control" id="psw" placeholder="Price" name="Price" value="{{ $srchs->price }}">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Added_by</label>
                          <input type="text" class="form-control" id="psw" placeholder="Added_by" name="Added" value="{{ $srchs->added_by }}">
                        </div>

                          <div class="form-group">
                          <label for="psw"><span ></span>Critical Stage</label>
                          <input type="text" class="form-control" id="psw" placeholder="Critical Stage" name="Critical" value="{{ $srchs->Critical_Stage }}">
                        </div>

                        <div class="form-group">
                          <label for="psw"><span ></span>Out Of Stock</label>
                          <input type="text" class="form-control" id="psw" placeholder="Out of Stock" name="Out" value="{{ $srchs->Out_of_Stock }}">
                        </div>
                       
                          <button class="btn btn-success btn-block" > Save</button>
                    <div class="another">
                      <button type="submit" class="btn btn-success btn-block" data-dismiss="modal"><span class="fa fa-close"></span> Cancel</button>
                    </div>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
          
            </tr>
    		@endforeach
    		    	 

                        
    	
    			  <div class = "pull-right">
			            <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal">Add new Products</a>


<!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Products</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Products" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname"><span></span>Product_Id</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="id">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span></span> Product Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="name">
                        </div>
                        
                        <div class="form-group">
                          <label for="psw"><span ></span>Quantity</label>
                          <input type="text" class="form-control" id="psw" placeholder="Quantity" name="Quan">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Price</label>
                        <input type="text" class="form-control" id="psw" placeholder="Price" name="Price">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span ></span>Added_by</label>
                          <select class="form-control" name="name" id="names" >
                          @foreach($staf as $Staff)
                          
                            <option >{{ $Staff->Name }}</option>
                            

                          @endforeach
                          </select>

                        </div>

                          <div class="form-group">
                          <label for="psw"><span ></span>Critical Stage</label>
                          <input type="text" class="form-control" id="psw" placeholder="Critical Stage" name="Critical">
                        </div>

                        <div class="form-group">
                          <label for="psw"><span ></span>Out Of Stock</label>
                          <input type="text" class="form-control" id="psw" placeholder="Out of Stock" name="Out">
                        </div>
                       
                          <button class="btn btn-success btn-block" > Save</button>
                    <div class="another">
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