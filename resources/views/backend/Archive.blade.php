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

       <img src="{{URL::asset('img/17.png')}}" style="  border-radius: 50%; height: 100px; margin-top: 30px; margin-left: 20px;">.
    
  
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
   <form action="/admin/archivelist" method="GET">
          <input id="search"  name="archivesearch" type="text" placeholder="Search Here">
          <input id="submit" type="submit" value="Search" >
      </form>

  		<body class="body">
  		
                <br><br>
                
                <table class="table">
                  
                  <tr>
                        	<th>Name</th>
                          <th>Email</th>
                          <th>Cellphone Number</th>
                          <th>Address</th>
                          <th>Postion</th>
                          <th>Gender</th>
                          <th>Branch</th>
                        <th>Action</th>
                </tr>
              
                @foreach($baliw as $staffarchive)
                      <tr>
                        <td>{{ $staffarchive->Name }}</td>
                        <td>{{ $staffarchive->Email }}</td>
                        <td>{{ $staffarchive->Cellphone_NO }}</td>
                        <td>{{ $staffarchive->Address }}</td>
                        <td>{{ $staffarchive->postion }}</td>
                        <td>{{ $staffarchive->Gender }}</td>
                        <td>{{ $staffarchive->blocation }}</td>
                        <td><a href="{{ URL::to('/admin/Staff', array($staffarchive->id)) }}">Restore</a></td>
                      </tr>
                      @endforeach
                </table>
              
  		</body>
  </div>
@stop