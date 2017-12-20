@extends('backend.layout')

@section('content')
<style>
	.drop{
		width: 200px;
	} 

</style>
  <div id="content">
  	<br><br>

      <button type="button" class="btn btn-danger" style="margin-left: 550px; margin-top: -50px;" data-toggle="modal" data-target="#myModal">Add Service</button>
  		          
                 <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Categorie</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Service" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname">Category Name:</label>
                          <input type="text" class="form-control" id="psw" name="thetruth">
                        </div>
                         
                       
                          <button class="btn btn-success btn-block" > Save</button>
                   
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
  	
       <button type="button" class="btn btn-danger" style="margin-left: 700px; margin-top: -90px;" data-toggle="modal" data-target="#myModal2">Add Service</button>
                 
                  <div id="myModal2" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Service</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Service" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname">Category Name:</label>
                          <select class="form-control" name="name" >
                          @foreach($thes as $service)
                            <option >{{ $service->categoryname }}</option>
                          @endforeach
                          </select>
                        </div>
                         <div class="form-group">
                          <label for="psw">ServiceName:</label>
                          <input type="text" class="form-control" id="psw" name="Marvins">
                        </div>
                        <div class="form-group">
                          <label for="psw">Price</label>
                          <input type="text" class="form-control" id="psw" name="Marv">
                        </div>
                       
                          <button class="btn btn-success btn-block" > Save</button>
                   
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
         

         <form action="/admin/Service/search" method="GET" style="margin-left: 250px; margin-top: -70px;">
          <input id="search"  name="srch" type="text" placeholder="Search Here">
          <input id="submit" type="submit" value="Search" >
      </form>
      <br><br>

       <table class="table">
       	<tr>
       		<th>Category</th>
       		<th>Service</th>
       		<th>Price</th>
       		<th>Action</th>
       	</tr>
       	@foreach($srchs as $service1)
       	<tr>
       		<td>{{ $service1->category }}</td>
       		<td>{{ $service1->servicename }}</td>
       		<td>{{ $service1->price }}</td>
       		<td><a href="" data-toggle="modal" data-target="#{{ $service1->id }}">Update</a></td>

          <div id="{{ $service1->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Service</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/serupdate" method="post"> 
                        {{ csrf_field() }}
                           <input type="hidden" name="updateser" value="{{ $service1->id }}">
                        <h4>Category Name</h4>
                        <div class="drop">
                <select class="form-control" style="width: 500px;" name="Cname">
                  @foreach($newone as $service)
                  <option value="{{ $service->categoryname }}">{{ $service->categoryname }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                         <h4>Service Name</h4>
                          <input type="Address" class="form-control" id="psw" placeholder="Service Name" name="Sname" value="{{ $service1->servicename }}">
                        </div>

                        <div class="form-group">
                         <h4>Price</h4>
                          <input type="Address" class="form-control" id="psw" placeholder="Price" name="price" value="{{ $service1->Price }}" >
                        </div>
                       
                       <button class="btn btn-success btn-block" > Save</button>

                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
          </div>

       	</tr>
       	@endforeach
       </table>
  </div>
@stop