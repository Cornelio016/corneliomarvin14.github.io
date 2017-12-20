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


       <img src="/public/img/17.png" style="  border-radius: 50%; height: 100px; margin-top: 30px; margin-left: 20px;">

   

    
  
  <div class="font">
    Senses Your Salon And Spa
  </div>
  <br><br>
  <div id="content">
                @if ($baliw->count() == 0)
                    <div class = "alert alert-danger">
                        <div class = 'text-warning'>
                            Item Not Found
                        </div>
                    </div>
                @endif
    <form action="/admin/Events" method="GET">
          <input id="search" name="ent" type="text" placeholder="Search Here">
          <input id="submit" type="submit" value="Search">
      </form>
               
  	<table class="table">
  		<tr>
        <th>Date</th>
        <th>Date Expired</th>
  			<th>Events Description</th>
        <th>Action</th>
  		</tr>
      @foreach($baliw as $Events)
      <tr>
          <td>{{ $Events->date }}</td>
          <td>{{ $Events->dateexpired }}</td>
          <td>{{ $Events->Description }}</td>
          <td><a href=""  data-toggle="modal" data-target="#{{ $Events->id }}">Edit</a><a href="{{ URL::to('DELETESS', array($Events->id)) }}">  Delete</a></td>

           <div id="{{ $Events->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Events</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/adminevents" method = "post">
                        {{ csrf_field() }}
                        <input type="hidden" name="Evts" value="{{ $Events->id }}">
                        <div class="form-group">
                          <label for="usrname"><span></span>Date</label>
                           <input type="text" class="form-control" name="bday" placeholder="Date" onchange="function" value="{{ $Events->date }}">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span></span>Date_expired</label>
                          <input type="text" class="form-control" name="bdays" placeholder="Date Expired" onchange="function" value="{{ $Events->dateexpired }}">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span></span>Events Description</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="Events" value="{{ $Events->Description }}">
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



  		<div style="margin-left: 300px; margin-top: -30px;">
			            <a type="button" class = "btn btn-danger" data-toggle="modal" data-target="#myModal">Add New Events</a>


                  <br><br><br>



<!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Events</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Events" method = "post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="usrname"><span></span>Date</label>
                           <input type="text" class="form-control" name="bday" placeholder="Date" onchange="function">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span></span>Date_expired</label>
                          <input type="text" class="form-control" name="bdays" placeholder="Date Expired" onchange="function">
                        </div>
                        <div class="form-group">
                          <label for="usrname"><span></span>Events Description</label>
                          <input type="text" class="form-control" id="usrname" placeholder="Name" name="Events">
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
            
    


  	</table>
  </div>
@stop