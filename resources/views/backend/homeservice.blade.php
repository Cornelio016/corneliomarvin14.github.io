@extends('backend.layout')
@section('content')

	<div id="content">
    	<table class="table">
    		<tr>
    			<th>id</th>
    			<th>Client Name</th>
    			<th>Address</th>
    			<th>Email</th>
    			<th>Cellphone_number</th>
    		
    		</tr>


    		@foreach($New as $homeservice)

    			<tr>
    				<td>{{ $homeservice->id }}</td>
    				<td>{{ $homeservice->name }}</td>
    				<td>{{ $homeservice->address }}</td>
    				<td>{{ $homeservice->Email }}</td>
    				<td>{{ $homeservice->cellnum }}</td>

    			</tr>

    		@endforeach
    	</table>
	</div>

@stop