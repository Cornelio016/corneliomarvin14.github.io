@extends('backend.layout')
@section('content')
<style>
    .font{
      margin-left: 250px; 
      font-family: "Comic Sans MS", cursive, sans-serif;
      font-size: 60px;
      
    }

		@media print {
		  body * {
		    visibility: hidden;
		  }
		  .printdocument, .printdocument * {
		    visibility: visible;
		  }
		  .printdocument {
		    position: absolute;
		    left: 0;
		    top: 0;
        min-height:100px;
		  }
		  .no-print, .no-print *
		  {
		    display: none !important;
		  }
		}

	
</style>
  <div class="printdocument">
  
  <div class="font">
    Senses Your Salon And Spa
  </div>
  <div class = "no-print">
 <form action="/road1/transactionlist/saves" method="GET">
          <input id="search"  name="searchroad1" type="text" placeholder="Search by date">
          <input id="submit" type="submit" value="Search" >
      </form>
 </div>
    <br><br>
  		<table class="table">
  			<thead>
  				<tr>
            <th>Date</th>
  					<th>Transaction Number</th>
  					<th>Service Name</th>
  					<th>Price</th>
  					<th>Categories</th>
  				</tr>
  			@foreach($list as $translist)
  			<tbody>
  				<tr>
            <td>{{ $translist->date }}</td>
  					<td>{{ $translist->trans_number }}</td>
  					<td>{{ $translist->servicename }}</td>
            <td class="price">{{ $translist->price }}</td>
            <input type="hidden" name="tid[]" value="{{ $translist->trans_number }}">
  					<td>{{ $translist->category }}</td>
  				</tr>
  			</tbody>
  			@endforeach
  			</thead>
  		</table>
     <p style="font-weight: bold;">Total: <span id="ilobblak"></span></p>
   <div class = "no-print">
    <button onclick = "window.print();">Print</button>
  </div>
     <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Total:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/road1/transactionlist/save" method="post">
                        {{ csrf_field() }}
                          <table class="table">
                            <thead>
                              <th>Service Name:</th>
                              <th>Price</th>
                            </thead>
                      
                        @foreach($list as $translist)
                          <tbody>
                            <tr>
                              <td>{{ $translist->servicename }}</td>
                              <td class="price">{{ $translist->price }}</td>
                              <input type="hidden" name="tid[]" value="{{ $translist->trans_number }}">
                            </tr>
                          </tbody>
                        @endforeach
                          </table> 
                         
                         <input id="fureberblak" type="hidden" name="fureberblak">

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
  <script>
    var price = document.getElementsByClassName("price");
    var com = document.getElementById("com");
    var ilobblak = document.getElementById("ilobblak");
    var fureberblak = document.getElementById("fureberblak");
    var Total = 0;

    window.addEventListener('load', lobelovely);

      function  lobelovely(){
         
       for(x = 0;x < price.length;x++){
        Total += parseFloat(price[x].innerHTML);
        ilobblak.innerHTML = Total;
        fureberblak.value = Total;
      
    } 
      }


  </script>
    
@stop