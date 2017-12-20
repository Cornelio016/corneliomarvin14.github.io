@extends('backend.layout')
@section('content')

	<div id="content">
    	<table class="table">
    		<tr>
    			<th>id</th>
    			<th>Client Name</th>
    			<th>Email</th>
                <th>Action</th>
    		</tr>


    		@foreach($Subs as $subscribe)

    			<tr>
    				<td>{{ $subscribe->id }}</td>
    				<td>{{ $subscribe->name }}</td>
    				<td>{{ $subscribe->email }}</td>
                    <td><a href="">Send to Email</a></td>
    				

    			</tr>

    		@endforeach
    	</table>
	</div>

@stop