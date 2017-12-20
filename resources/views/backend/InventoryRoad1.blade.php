@extends('backend.layout')

@section('active2')
    class = "active"
@endsection

@section('content')

  <div id="content">
  		<table class="table">
  			<tr>
  				<th>Products ID</th>
  				<th>Products Name</th>
  				<th>Products Stocks</th>
  				<th>Products Price</th>
  				<th>Added_by</th>
  				<th>Action</th>
  			</tr>

       @foreach($PrsRoad1 as $InventoryRoad1)
        <tr>
              <td>{{ $InventoryRoad1->id }}</td>
              <td>{{ $InventoryRoad1->road1name }}</td>
              <td>{{ $InventoryRoad1->road1quantity }}</td>
              <td>{{ $InventoryRoad1->road1price }}</td>
              <td>{{ $InventoryRoad1->road1added_by }}</td>
           
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
                      <form role="form" action="/manager/Road1" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname"><span class="fa fa-user-circle-o"></span>Product_Id</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="id">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span class="fa fa-user-circle-o"></span> Name</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="name">
                        </div>
                        
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Quantity</label>
                          <input type="text" class="form-control" id="psw" placeholder="Quantity" name="Quan">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Price</label>
                          <input type="text" class="form-control" id="psw" placeholder="Price" name="Price">
                        </div>
                        <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Added_by</label>
                          <input type="text" class="form-control" id="psw" placeholder="Added_by" name="Added">
                        </div>

                          <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Critical Stage</label>
                          <input type="text" class="form-control" id="psw" placeholder="Critical Stage" name="Critical">
                        </div>

                        <div class="form-group">
                          <label for="psw"><span class="fa fa-eye"></span>Out Of Stock</label>
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