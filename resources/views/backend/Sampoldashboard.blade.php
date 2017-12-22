@extends('backend.layout')



@section('content')
	<style>
		.font{
			margin-left: 250px; 
			margin-top: -130px;
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size: 60px;
		
		}

		.title{
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-weight: bold;
			font-size: 30px;
			margin-top: 20px;
		}
		.hsh{
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-weight: bold;
			font-size: 20px;
		}
	</style>

	<img src="{{URL::asset('img/thumbnail/SensesSapangpalay.jpg')}}" style="  border-radius: 90%; height: 170px; margin-top: 30px; margin-left: 20px;">.

		
	
	<div class="font">
		Senses Your Salon And Spa
	</div>

	<br><br><br>
  	<div class="title text-center">
  		Service Analytics of Sampol Branch
  	</div>
  	<div class="text-center" style="font-weight: bolder;">
  		*New transactions will be added and derived to the analytics graph..
  	</div>
  	 <div style="font-weight: bold; margin-top: 20px;">
  		(Categories Under Service)
  	</div>
  <div id="content">
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
		name: "Sampol",
		color: "silver",
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


</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="{{URL::asset('canvas/canvasjs.min.js')}}"></script>
 <div class="hsh text-center">
		Number of Service
</div>	@stop