@extends('backend.layout')
@section('content')
  <style>
      .font{
      margin-left: 250px; 
      margin-top: -80px;
      font-family: "Comic Sans MS", cursive, sans-serif;
      font-size: 60px;
      
    }

  </style>
  

   <img src="{{URL::asset('img/17.png')}}" style="  border-radius: 50%; height: 100px; margin-top: 30px; margin-left: 20px;">.

 
  

  <div id="content">
    @if(Auth::User()->admin == 0)
   <div class="font">
    Senses Your Salon And Spa
  </div>
<br><br>

    <div class="text-muted" style="font-size: 50px;">
        <label>New Transaction</label>
    </div>

    <!-- FACE CATEGORY -->

    <div style="font-size: 20px;" class="text-center">
    <label>FACE</label>

    </div>
	<div id = "putamali">
	</div>
		<table class="table">
			
			 <thead>
				 <tr>
       
					 <th>Service Name</th>
					 <th>Price</th>
					 <th>Action</th>
				 </tr>
			 </thead>
		@foreach($face as $serviceface)
			 <tbody>
			 <tr class="active">

				<td class="ahh">{{ $serviceface->nameservice }}</td>
				<td class="ohh"> {{ $serviceface->price }}</td>
				<td><input type="checkbox" name="face[]" class="check"></td>
			 </tr>
			 </tbody>

		@endforeach
			
		</table>
	
		<button id="cart" data-toggle="modal" data-target="#myModal">Submit</button>


		 <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
                            	
                           <p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      
                      ?>
                      <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction = uniqid();
                      	?>
                      	<input type="hidden" name="transid" value="{{ $transaction }}">
                      	<span>{{ $transaction }}</span>
                     	<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="lovelyilabyu">
                     			
                     		</tbody>
                     	</table>
						             <input name = "category" value = "Face" type = "hidden">
                          <button class="btn btn-success btn-block" > Save</button>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>
		<!-- HAIR STYLING -->
		
		<div style="font-size: 20px;" class="text-center">
    		<label>HAIR STYLING</label>
    	</div>
        <div id = "hais">
        </div>
    	<table class="table">
    		 <thead>
				 <tr>
					 <th>Service Name</th>
					 <th>Price</th>
					 <th>Action</th>
				 </tr>
			 </thead>
			 @foreach($hairstyle as $servicehairstyle)
			 	<tbody>
					 <tr class="active">
						<td class="hair">{{ $servicehairstyle->servicename }}</td>
						<td class="hair1"> {{ $servicehairstyle->price }}</td>
						<td><input type="checkbox" name="hairs[]" class="check1"></td>
					 </tr>
			
			 	</tbody>
			 @endforeach
			 	
    	</table>

		 <button id="cart1" data-toggle="modal" data-target="#myModal1">Submit</button>


		 <div id="myModal1" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction2 =   uniqid();
                      	?>
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="hairstyling">
                     			
                     		</tbody>
                     	</table>	
                           <input name = "category" value = "Hairstyling" type = "hidden">
                          <button class="btn btn-success btn-block" > Save</button>
                      </form>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>

    	<!-- HAIR COLOR -->

	    <div style="font-size: 20px;" class="text-center">
	    		<label>HAIR COLOR</label>
	    </div>
      <div id = "haircolorss">
        </div>
    <table class="table">
    		 <thead>
				 <tr>
					 <th>Service Name</th>
					 <th>Price</th>
					 <th>Action</th>
				 </tr>
			 </thead>
			 @foreach($haircolor as $servicehaircolor)
			 	 <tbody>
			 <tr class="active">
				<td class="color">{{ $servicehaircolor->servicename }}</td>
				<td class="color1"> {{ $servicehaircolor->price }}</td>
				<td><input type="checkbox" name="colors[]" class="check2"></td>
				
			 </tr>
			 
			 	</tbody>
			 @endforeach
	</table>


	 <button id="cart2" data-toggle="modal" data-target="#myModal2">Submit</button>

	 <div id="myModal2" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction  =   uniqid()
                      	?>;
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="haircolor">
                     			
                     		</tbody>
                     	</table>	
                     	   <input name = "category" value = "haircolor" type = "hidden">
                      <button class="btn btn-success btn-block" > Save</button>
                      </form>
                   
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>

		<!-- NAIL CARE -->

		   	<div style="font-size: 20px;" class="text-center">
			    		<label>NAIL CARE</label>
			</div>
      <div id="nailcaress">
        
      </div>
			<table class="table">
				 <thead>
				 <tr>
					 <th>Service Name</th>
					 <th>Price</th>
					 <th>Action</th>
				 </tr>
			 </thead>
			 @foreach($nailcare as $servicenailcare)
			 	 <tbody>
					 <tr class="active">
						<td class="nail">{{ $servicenailcare->servicename }}</td>
						<td class="nail1">{{ $servicenailcare->price }}</td>
						<td><input type="checkbox" name="nails[]" class="check3"></td>
					 </tr>
				</tbody>
			@endforeach
			</table>


			<button id="cart3" data-toggle="modal" data-target="#myModal3">Submit</button>

	 <div id="myModal3" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction  =   uniqid()
                      	?>;
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="nailcare">
                     			
                     		</tbody>
                     	</table>	
                     	   <input name = "category" value = "nailcare" type = "hidden">
                      <button class="btn btn-success btn-block" > Save</button>
                      </form>
                   
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>


			<!-- HAIR TREATMENT -->

	<div style="font-size: 20px;" class="text-center">
		<label>HAIR TREATMENT</label>
	</div>
  <div id="hairtreatmentsss"></div>
		<table class="table">
			<thead>
				 <tr>
					 <th>Service Name</th>
					 <th>Price</th>
					 <th>Action</th>
				 </tr>
			 </thead>
		@foreach($hairtreatment as $servicehairtreatment)
			 <tbody>
			 	<tr class="active">
			 			<td class="treatment">{{ $servicehairtreatment->servicename }}</td>
			 			<td class="treatment1">{{ $servicehairtreatment->price }}</td>
			 			<td><input type="checkbox" name="treatments[]" class="check4"></td>
			 	</tr>
			 </tbody>
		@endforeach
		</table>



			<button id="cart4" data-toggle="modal" data-target="#myModal4">Submit</button>

	 <div id="myModal4" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction  =   uniqid()
                      	?>;
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="hairtreatment">
                     			
                     		</tbody>
                     	</table>	
                     	   <input name = "category" value = "hairtreatment" type = "hidden">
                      <button class="btn btn-success btn-block" > Save</button>
                      </form>
                   
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>


		<!-- SPA -->

	<div style="font-size: 20px;" class="text-center">
		<label>SPA</label>
	</div>
  <div id="spasss"></div>
	<table class="table">
		<thead>
			<tr>
				 <th>Service Name</th>
				 <th>Price</th>
				 <th>Action</th>
			</tr>
		</thead>
		@foreach($spa as $servicespa)
		<tbody>
			<tr class="active">

				<td class="spa">{{ $servicespa->servicename }}</td>
				<td class="spa1">{{ $servicespa->price }}</td>
				<td><input type="checkbox" name="spas[]" class="check5"></td>
			</tr>
		</tbody>
		@endforeach

	</table>	

	<button id="cart5" data-toggle="modal" data-target="#myModal5">Submit</button>

	 <div id="myModal5" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction  =   uniqid()
                      	?>;
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="spamassage">
                     			
                     		</tbody>
                     	</table>	
                     	   <input name = "category" value = "spamassage" type = "hidden">
                      <button class="btn btn-success btn-block" > Save</button>
                      </form>
                   
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>


	<!-- WAXING -->

	<div style="font-size: 20px;" class="text-center">
		<label>WAXING</label>
	</div>
  <div id="waxna"></div>
	<table class="table">
		<thead>
			<tr>
				 <th>Service Name</th>
				 <th>Price</th>
				 <th>Action</th>
			</tr>
		</thead>
		@foreach($waxing as $servicewaxing)
		<tbody>
			<tr class="active">

				<td class="wax">{{ $servicewaxing->servicename }}</td>
				<td class="wax1">{{ $servicewaxing->price }}</td>
				<td><input type="checkbox" name="waxs[]" class="check6"></td>
			</tr>
		</tbody>
		@endforeach

	</table>

	<button id="cart6" data-toggle="modal" data-target="#myModal6">Submit</button>

	 <div id="myModal6" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction  =   uniqid()
                      	?>;
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="waxings">
                     			
                     		</tbody>
                     	</table>	
                     	   <input name = "category" value = "waxing" type = "hidden">
                      <button class="btn btn-success btn-block" > Save</button>
                      </form>
                   
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                  </div>
        </div>

	<!-- SENSESKIDS -->

	<div style="font-size: 20px;" class="text-center">
		<label>SENSES KIDS</label>
	</div>
  <div id="sensessss"></div>
	<table class="table">
		<thead>
			<tr>
				 <th>Service Name</th>
				 <th>Price</th>
				 <th>Action</th>
			</tr>
		</thead>
		@foreach($senseskids as $servicesenseskids)
		<tbody>
			<tr class="active">

				<td class="kid">{{ $servicesenseskids->servicename }}</td>
				<td class="kid1">{{ $servicesenseskids->price }}</td>
				<td><input type="checkbox" name="kids[]" class="check7"></td>
			</tr>
		</tbody>
		@endforeach
	</table>
	
<button id="cart7" data-toggle="modal" data-target="#myModal7">Submit</button>

	 <div id="myModal7" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  	<div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Serive Take:</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form" action="/admin/Transaction/gagoka" method="post">
					<p style="font-weight: bold;">Date:</p>
                      <?php 

                      echo date("Y-m-d");
                      ?>
                       <input type="hidden" name="date" value="{{ date("Y-m-d") }}">
                      	<p style="font-weight: bold;">Transaction Code:</p>
                      	{{ csrf_field() }}
                      	<?php

                      	$transaction  =   uniqid()
                      	?>;
                      	<input type="hidden" name="transid" value="{{ $transaction2 }}">
                      	<span>{{ $transaction2 }}</span>
						<table class="table">
                     		<thead>
                     			<tr>
                     				<th>Service Take</th>
                     				<th>Price</th>
                     			</tr>
                     		</thead>
                     		<tbody id="senseskid">
                     			
                     		</tbody>
                     	</table>	
                     	   <input name = "category" value = "senseskids" type = "hidden">
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
@endif





<script type="text/javascript">
	$('#myModal').on('hidden.bs.modal', function () {
		$('#lovelyilabyu').empty();

	 
	});

	$('#myModal1').on('hidden.bs.modal', function () {
		$('#hairstyling').empty();

	 
	});
	$('#myModal2').on('hidden.bs.modal', function () {
		$('#haircolor').empty();

 
	});
	$('#myModal3').on('hidden.bs.modal', function () {
		$('#nailcare').empty();

	 
	});
	$('#myModal4').on('hidden.bs.modal', function () {
		$('#hairtreatment').empty();

	 
	});
	$('#myModal5').on('hidden.bs.modal', function () {
		$('#spamassage').empty();

	 
	});
	$('#myModal6').on('hidden.bs.modal', function () {
		$('#waxings').empty();

	
	});
	$('#myModal7').on('hidden.bs.modal', function () {
		$('#senseskid').empty();

		
	});
	//face
	var ahh = document.getElementsByClassName("ahh");
	var ohh = document.getElementsByClassName("ohh");
	//haitstyle
	var hair = document.getElementsByClassName("hair");
	var hair1 = document.getElementsByClassName("hair1");
	// hair color
	var color = document.getElementsByClassName("color");
	var color1 = document.getElementsByClassName("color1");
	//nail care
	var nail = document.getElementsByClassName("nail");
	var nail1 = document.getElementsByClassName("nail1");
	//HairTreatment
	var treatment = document.getElementsByClassName("treatment");
	var treatment1 = document.getElementsByClassName("treatment1");
	//SPA
	var spa = document.getElementsByClassName("spa");
	var spa1 = document.getElementsByClassName("spa1");
	// WAXING
	var wax = document.getElementsByClassName("wax");
	var wax1 = document.getElementsByClassName("wax1");
	// Senses Kids
	var kid = document.getElementsByClassName("kid");
	var kid1 = document.getElementsByClassName("kid1");

	var face = document.getElementsByName("face");
	var hairs = document.getElementsByName("hairs");
	var colors = document.getElementsByName("colors");
	var nails = document.getElementsByName("nails");
	var treatments = document.getElementsByName("treatments");
	var spas = document.getElementsByName("spas");
	var waxs = document.getElementsByName("waxs");
	var kids = document.getElementsByName("kids");

	var check = document.getElementsByClassName("check");
	var check1 = document.getElementsByClassName("check1");
	var check2 = document.getElementsByClassName("check2");
	var check3 = document.getElementsByClassName("check3");
	var check4 = document.getElementsByClassName("check4");
	var check5 = document.getElementsByClassName("check5");
	var check6 = document.getElementsByClassName("check6");
	var check7 = document.getElementsByClassName("check7");


	var lovelyilabyu = document.getElementById("lovelyilabyu");
	var hairstylings = document.getElementById("hairstyling");
	var haircolors = document.getElementById("haircolor");
	var nailcaress = document.getElementById("nailcare");
	var hairtreatmentss = document.getElementById("hairtreatment");
	var spass = document.getElementById("spamassage");
	var waxss = document.getElementById("waxings");
	var senseskidss = document.getElementById("senseskid");

	var cart = document.getElementById("cart");
	var cart1 = document.getElementById("cart1");
	var cart2 = document.getElementById("cart2");
	var cart3 = document.getElementById("cart3");
	var cart4 = document.getElementById("cart4");
	var cart5 = document.getElementById("cart5");
	var cart6 = document.getElementById("cart6");
	var cart7 = document.getElementById("cart7");

	
	var sample = {
		"black": {
			"Name": "Cornelio",
			"Age": "18"
		},
		"White": {
			"Name": "Ecoy",
			"Age": "17"
		}
	};
	cart.addEventListener("click", cartclick);
	cart1.addEventListener("click", hairstyling);
	cart2.addEventListener("click", haircolor);
	cart3.addEventListener("click", nailcare);
	cart4.addEventListener("click", hairtreatment);
	cart5.addEventListener("click", spamassage);
	cart6.addEventListener("click", waxings);
	cart7.addEventListener("click", senseskid);




	function cartclick() {
		
		
		if(document.querySelectorAll('input[class="check"]:checked').length == 0){
			cart.removeAttribute("data-target");
			document.getElementById('putamali').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
		}else{
			cart.setAttribute("data-target", "#myModal");
			for(x = 0;x < ahh.length;x++){ 
				if (check[x].checked) {
					lovelyilabyu.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+ahh[x].innerHTML+"'>"+ahh[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+ohh[x].innerHTML+"'>"+ohh[x].innerHTML+"</td></tr>" ;
				}
				

			}
		}
	}



	function hairstyling() {

		
      if (document.querySelectorAll('input[class="check1"]:checked').length == 0) {
        cart1.removeAttribute("data-target");
            document.getElementById('hais').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
        cart1.setAttribute("data-target", "#myModal1");
		 for(x = 0;x < hair.length;x++){ 
		  if (check1[x].checked) {
		  		 hairstylings.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+hair[x].innerHTML+"'>"+hair[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+hair1[x].innerHTML+"'>"+hair1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
    }
	}



	function haircolor() {

		
      if (document.querySelectorAll('input[class="check2"]:checked').length == 0) {
          cart2.removeAttribute("data-target");
            document.getElementById('haircolorss').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
         cart2.setAttribute("data-target", "#myModal2");
		 for(x = 0;x < color.length;x++){ 
		  if (check2[x].checked) {
		  		 haircolors.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+color[x].innerHTML+"'>"+color[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+color1[x].innerHTML+"'>"+color1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
    }
	}


	function nailcare() {



      if (document.querySelectorAll('input[class="check3"]:checked').length == 0) {
        cart3.removeAttribute("data-target");
            document.getElementById('nailcaress').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
        cart3.setAttribute("data-target", "#myModal3");
		 for(x = 0;x < nail.length;x++){ 
		  if (check3[x].checked) {
		  		 nailcaress.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+nail[x].innerHTML+"'>"+nail[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+nail1[x].innerHTML+"'>"+nail1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
    }
	}

	function hairtreatment() {

		
      if (document.querySelectorAll('input[class="check4"]:checked').length == 0) {
        cart4.removeAttribute("data-target");
            document.getElementById('hairtreatmentsss').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
        cart4.setAttribute("data-target", "#myModal4");
		 for(x = 0;x < treatment.length;x++){ 
		  if (check4[x].checked) {
		  		 hairtreatmentss.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+treatment[x].innerHTML+"'>"+treatment[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+treatment1[x].innerHTML+"'>"+treatment1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
    }
	}

	function spamassage() {

		
      if (document.querySelectorAll('input[class="check5"]:checked').length == 0) {
         cart5.removeAttribute("data-target");
            document.getElementById('spasss').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
        cart5.setAttribute("data-target", "#myModal5");
		 for(x = 0;x < treatment.length;x++){ 
		  if (check5[x].checked) {
		  		 spass.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+spa[x].innerHTML+"'>"+spa[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+spa1[x].innerHTML+"'>"+spa1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
    }
	}

	function waxings() {

		
      if (document.querySelectorAll('input[class="check6"]:checked').length == 0) {
        cart6.removeAttribute("data-target");
            document.getElementById('waxna').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
        cart6.setAttribute("data-target", "#myModal6");
		 for(x = 0;x < wax.length;x++){ 
		  if (check6[x].checked) {
		  		 waxss.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+wax[x].innerHTML+"'>"+wax[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+wax1[x].innerHTML+"'>"+wax1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
   }
	}


		function senseskid() {

		

      if (document.querySelectorAll('input[class="check7"]:checked').length == 0) {
           cart7.removeAttribute("data-target");
            document.getElementById('sensessss').innerHTML = "<div class='alert alert-success'><strong>Plss: </strong>Check the box</div>";
      }else{
        cart7.setAttribute("data-target", "#myModal7");
		 for(x = 0;x < kid.length;x++){ 
		  if (check7[x].checked) {
		  		 senseskidss.innerHTML += "<tr><td>"+"<input name='pogi[]' type='hidden' value='"+kid[x].innerHTML+"'>"+kid[x].innerHTML+"</td><td>"+"<input name='pogiako[]' type='hidden' value='"+kid1[x].innerHTML+"'>"+kid1[x].innerHTML+"</td></tr>" ;
		  }
		 	

		 }
    }
	}







</script>


@stop

