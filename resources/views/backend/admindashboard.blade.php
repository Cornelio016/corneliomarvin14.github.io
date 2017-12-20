@extends('backend.layout')



@section('content')



	<style>
		.box{
			border: 5px solid #32CD32;
			border-radius: 10px;
			background-color: #278936;
			border-style: groove;
			font-size: 20px;
			font-family: "Times New Roman", Times, serif;
			height: 100px;
			width: 200px;
			color: #000;
			margin-left: 450px; 
		}

		.one{
			margin-top: -100px;
			padding-left: 205px;
		}
		.one1{
			margin-top: -100px;
			padding-left: 250px;
		}
		.box1{
			border: 5px solid #32CD32;
			border-radius: 10px;
			background-color: #98ff98;
			border-style: groove;
			font-size: 20px;
			font-family: "Times New Roman", Times, serif;
			height: 100px;
			width: 200px;
			color: #000;
		}
			.box2{
			border: 5px solid #32CD32;
			border-radius: 10px;
			background-color: #98ff98;
			border-style: groove;
			font-size: 20px;
			font-family: "Times New Roman", Times, serif;
			height: 100px;
			width: 200px;
			color: #000;
		}
		.font{
			margin-left: 250px; 
			margin-top: -90px;
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size: 60px;
			
		}
		.graph{
			margin-top: 10px;
		}
		.title{
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-weight: bold;
			font-size: 30px;
		}
		.hsh{
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-weight: bold;
			font-size: 20px;
		}

		
		
		
	</style>
	
			 <img src="/public/img/17.png" style="  border-radius: 50%; height: 100px; margin-top: 30px; margin-left: 20px;">.
		
	
	<div class="font">
		Senses Your Salon And Spa
	</div>
	
	<br><br><br>
  <div id="content">
   @if(Auth::User()->admin)
  	<div class="box text-center">Website View
  		
  		<h1 style="margin-top: 5px;" >{{ $count->count }}</h1>
  		
  	</div>
  		
  		<!-- <div class="one1">
	  		<div class="box2 text-center">
	  			Top Categories
				<div style="font-weight: bolder;">{{ $transhistory }}</div>
	  		</div>
  		</div> -->
  		

  	@endif
  </div>
  	
  	<div class="title text-center">
  		Service Analytics of Three Branch
  	</div>
  	<div class="text-center" style="font-weight: bolder;">
  		*New transactions will be added and derived to the analytics graph..
  	</div>
  	<div style="font-weight: bold; margin-top: 20px;">
  		Categories Under Service
  	</div>
  	
  <div class="graph">
		  <script>
		window.onload = function () {

		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,

			legend: {
				cursor:"pointer",
				itemclick : toggleDataSeries
			},
			toolTip: {
				shared: true,
				content: toolTipFormatter
			},
			data: [{
				type: "bar",
				name: "Road 1",
				color: "gold",
				dataPoints: [
					{ y: {{ $senseskids }}, label: "SENSESKIDS" },
					{ y: {{ $waxings }}, label: "WAXING" },
					{ y: {{ $spas }}, label: "SPA" },
					{ y: {{ $hairtreatments }}, label: "HAIR TREATMENT" },
					{ y: {{ $nailcares }}, label: "NAIL CARE" },
					{ y: {{ $haircolornilovely }}, label: "HAIR COLOR" },
					{ y: {{ $hairstylingnilovely }}, label: "HAIR STYLING" },
					{ y: {{ $facenilovely }}, label: "FACE" }
				]
			},
			{
				type: "bar",
			
				name: "Sapang Palay",
				color: "silver",
				dataPoints: [
					{ y: {{ $senseskidsssampol }}, label: "SENSESKIDS" },
					{ y: {{ $waxingsssampol }}, label: "WAXING" },
					{ y: {{ $spasssampol }}, label: "SPA" },
					{ y: {{ $hairtreatmentsssampol }}, label: "HAIR TREATMENT" },
					{ y: {{ $nailcaresssampol }}, label: "NAIL CARE" },
					{ y: {{ $haircolorsampol }}, label: "HAIR COLOR" },
					{ y: {{ $hairstylingsampol }}, label: "HAIR STYLING" },
					{ y: {{ $Facesampol }}, label: "FACE" }
				]
			},
			{
				type: "bar",
		
				name: "Tungko",
				color: "#A57164",
				dataPoints: [
					{ y: {{ $senseskidss }}, label: "SENSESKIDS" },
					{ y: {{ $waxingss }}, label: "WAXING" },
					{ y: {{ $spass }}, label: "SPA" },
					{ y: {{ $hairtreatmentss }}, label: "HAIR TREATMENT" },
					{ y: {{ $nailcaress }}, label: "NAIL CARE" },
					{ y: {{ $haircolor }}, label: "HAIR COLOR" },
					{ y: {{ $hairstyling }}, label: "HAIR STYLING" },
					{ y: {{ $Face }}, label: "FACE" }
				]
			}]
		});
		chart.render();

		function toolTipFormatter(e) {
			var str = "";
			var total = 0 ;
			var str3;
			var str2 ;
			for (var i = 0; i < e.entries.length; i++){
				var str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
				total = e.entries[i].dataPoint.y + total;
				str = str.concat(str1);
			}
			str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
			str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
			return (str2.concat(str)).concat(str3);
		}

		function toggleDataSeries(e) {
			if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			}
			else {
				e.dataSeries.visible = true;
			}
			chart.render();
		}

		}
		</script>
</div>
	


<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="/public/canvas/canvasjs.min.js"></script>
<div class="hsh text-center">
		Number of Service
</div>
@stop	