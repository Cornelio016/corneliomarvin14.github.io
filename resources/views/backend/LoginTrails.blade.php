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

                   <img src="{{URL::asset('img/17.png')}}" style="  border-radius: 50%; height: 100px; margin-top: 30px; margin-left: 20px;">


                
              
              <div class="font">
                Senses Your Salon And Spa
              </div>
              <br><br>

	<div id="content">
    	<table class="table">
         <thead>
             <tr>
                 <th>Name</th>
                 <th>Time In</th>
                 <th>Time Out</th>
             </tr>
         </thead>   
        </table>
	</div>

@stop