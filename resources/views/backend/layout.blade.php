<!DOCTYPE html> 
<html> 
   <head> 
      <title>Backend</title> 
      <meta name="viewport" content="width=device-width, initialscale=1.0"> 
      <!-- Bootstrap --> 

      <link href="/public/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> 
      <!-- Bootstrap Form Helpers -->
      <link href="/public/form-helpers/dist/css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
      
  
      <link href="/resources/assets/css/backend/backend.css" rel="stylesheet">
      <link href="/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


      
      <link href="/public/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet"> 
      <link href="/public/resources/assets/css/backend/backend.css" rel="stylesheet">
      <link href="/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


     
      <script src="/resources/assets/js/general/jquery.min.js"></script>


      <script type="text/javascript" src="/public/bootstrap dp/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="/public/bootstrap dp/css/bootstrap-datepicker3.css"/>

     

      <script>
        $(document).ready(function(){
          var date_input=$('input[name="bday"]');
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            orientation: "bottom",
           
          })
        })
      </script>
       <script>
        $(document).ready(function(){
          var date_input=$('input[name="bdays"]');
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            orientation: "bottom",
            
          })
        })
      </script>

   </head>  
   <body> 
    

    <div class="container">
        <div class="row">
            <div class="wrapper">
                <div class="side-bar">
                    <ul>
                      @if(Auth::User()->admin)
                        <li class="menu-head">
                            <a href="/home">Admin Panel</a> <span></span><a href="#" class="push_menu"><span class="fa fa-exchange pull-right"></span></a>
                        </li>
                      @else
                      <li class="menu-head">
                           <a href="/home">{{ Auth::User()->branch }} Panel</a>  <span></span><a href="#" class="push_menu"><span class="fa fa-exchange pull-right"></span></a>
                        </li>
                      @endif
                        <div class="menu">
                          @if(Auth::User()->admin)
                            <li>
                                <a href="/admin/dashboard" >Admin Dashboard <span class="fa fa-bar-chart  pull-right "></span></a>
    
                            </li>
              
                                 @endif
                             <!--  @if(Auth::User()->admin == 0)
                             <li>
                                <a href="/admin/Branch/Road1" >Branch Dashboard <span class="  pull-right "></span></a>
    
                            </li>
                            @endif -->
                             <li>
                              @if(Auth::User()->admin)
                                <a href="#submenu-4" data-toggle="collapse">Branch <span class="fa fa-home pull-right"></span></a>
                                <ul id="submenu-4" class="panel-collapse collapse panel-switch design" role="menu">
                                
                                    <li><a href="/admin/Branch/Road1">&nbsp;&nbsp;&nbsp;Road1 Dashboard</a></li>
                                    <li><a href="/admin/Branch/Tungko">&nbsp;&nbsp;&nbsp;Tungko Dashboard</a></li>
                                  
                                    <li><a href="/admin/Branch/Sampol">&nbsp;&nbsp;&nbsp;Sapang palay Dashboard</a></li>
                                </ul>
                                @endif
                          
                              @if(Auth::User()->admin)
                            <li>
                                <a href="/admin/Service_and_Category">Service/Category <span class="fa fa-scribd  pull-right "></span></a>
                            </li>
                            
                            <!-- <li>
                                <a href="/admin/Products">Products Inventory<span class="glyphicon pull-right"></span></a>
                            </li> -->
                          
                             <li>
                                <a href="#submenu-5" data-toggle="collapse">Staff <span class="fa fa-user pull-right"></span></a>
                                <ul id="submenu-5" class="panel-collapse collapse panel-switch design" role="menu">
                                  @if(Auth::User()->admin)
                                    <li><a href="/admin/Staff">&nbsp;&nbsp;&nbsp;Staff List</a></li>
                                    <li><a href="/admin/archivelist">&nbsp;&nbsp;&nbsp;Archived</a></li>
                                  @endif  
                                   
                                </ul>
                            </li>
                           
                            
                          <!--   <li>
                                <a href="/admin/homeservice" >Home Service <span class="glyphicon pull-right"></span></a>
                            </li> -->
                            <li>
                                <a href="/admin/Events" >Events <span class="fa fa-calendar-o  pull-right"></span></a>
                            </li>
                            @endif
                              @if(Auth::User()->admin == 0)
                            <li>
                                <a href="#submenu-6" data-toggle="collapse">Graph Analytics<span class="fa fa-user pull-right"></span></a>
                                <ul id="submenu-6" class="panel-collapse collapse panel-switch design" role="menu">
                            
                                    <li><a href="/branch/road1graph">&nbsp;&nbsp;&nbsp;Road1</a></li>
                                    <li><a href="/branch/sapangpalaygraph">&nbsp;&nbsp;&nbsp;Sapang Palay</a></li>
                                    <li><a href="/branch/tungkograph">&nbsp;&nbsp;&nbsp;Tungko</a></li>
                                 
                                   
                                </ul>
                            </li>
                           
                              
                            <li>
                                <a href="/admin/Transaction">Transaction <span class="fa fa-money pull-right"></span></a>
                            </li>
                             
                            
                            <li>
                                <a href="/road1/transactionlist">Transaction  List<span class="fa fa-money pull-right"></span></a>
                            </li>
                            @endif

                             <!--  @if(Auth::User()->admin == 0)
                               <li>
                                <a href="/manager/Road1">Products inventory <span class="glyphicon pull-right"></span></a>
                            </li>
                             @endif -->
                       <!--        @if(Auth::User()->admin == 0)
                               <li>
                                <a href="/manager/Customer">Customer Information Record <span class="glyphicon pull-right"></span></a>
                            </li>
                             @endif -->
                            @if(Auth::User()->admin)
                            
                            <!-- <li>
                                <a href="/admin/subscribe">subscriber <span class="glyphicon pull-right"></span></a>
                            </li> -->
                          <!--   <li>
                                <a href="">Message Box <span class="glyphicon pull-right"></span></a>
                            </li> -->
                            @endif
                           
                            <li>
                                <a href="#submenu-3" data-toggle="collapse">Settings <span class="fa fa-cog pull-right"></span></a>
                                <ul id="submenu-3" class="panel-collapse collapse panel-switch design" role="menu">
                                  @if(Auth::User()->admin)
                                    
                                    <li><a href="/admin/users">&nbsp;&nbsp;&nbsp;Users Account</a></li>
                                    <li><a href="/admin/Login">&nbsp;&nbsp;&nbsp;Log in Trails</a></li>
                                  @endif  
                                    <li><a href="/auth/logout">&nbsp;&nbsp;&nbsp;Logout</a></li>
                                </ul>
                            </li>
                                                        
                        </div>
                        
                    </ul>
                </div>  
                 
                <div class="content">
              


                    <div class = "container"> 
                    
                      
                            @yield('content')

                    </div>

                </div>

            </div>
        </div>
    </div>
      
   

    






      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      
      <!-- Include all compiled plugins (below), or include individual files as needed --> 

      <script src="/public/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 

      <!-- Bootstrap Form Helpers -->
      <script src="/public/form-helpers/dist/js/bootstrap-formhelpers.min.js"></script>

      <script src="/public/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 



      

      <script type="text/javascript">
        $(document).ready(function(){
            $(".push_menu").click(function(){
                 $(".wrapper").toggleClass("active");
            });
        });
        $(function(){
          $(".tey").each(function(i){
            len=$(this).text().length;
            if(len>80)
            {
              $(this).text($(this).text().substr(0,80)+'...');
            }
          });
        });
        // var maxLength = 0;
        //     $('textarea').keyup(function() {
        //         var length = $(this).val().length;
        //         var length = maxLength+length;
        //         $('#characters').text(length);
        //     });
        $("#warn-me").click(function() {
                      $(document).trigger("add-alerts", [
                        {
                          "message": "This is a warning.",
                          "priority": 'warning'
                        }
                      ]);
                    });
         $(function(){
            $("input[type='radio']").change(function(){

                $("input[type='submit']").prop("disabled", false);
                //Or
                // $("input[type='submit']").removeAttr("disabled");
            });
        });


         

         function wordCount( val ){
              var wom = val.match(/\S+/g);
              return {
               
                  words              : wom ? wom.length : 0
              };
          }


          var textarea = document.getElementById("text");
          var result   = document.getElementById("result");

          textarea.addEventListener("input", function(){
            var v = wordCount( this.value );
            document.getElementById('myField').value = v.words;
            result.innerHTML = (
                
                "Words Count: "+ v.words
            );
          }, false);

          $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
          })  


      </script>
   </body> 
</html>
        
      

        
        