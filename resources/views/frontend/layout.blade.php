<!DOCTYPE html>
<html>
<head>
  <title>Senses</title>
  <link rel="stylesheet" tpe="text/css" href="{{URL::asset('senses/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('senses/css/design.css')}}">
  <link href="{{URL::asset('senses/css/nivo-lightbox.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('senses/plugins/boot_font/css/font-awesome.min.css')}}">
  <script src="{{URL::asset('senses/js/jquery-1.11.3.min.js')}}"></script>
</head>
<body>
  <nav class="navbar navbar-own navbar-fixed-top" role="navigation"> 
     <div class="navbar-header"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse"  
           data-target="#example-navbar-collapse"> 
           <span class="sr-only">Toggle navigation</span> 
           <span class="icon-bar"></span> 
           <span class="icon-bar"></span> 
           <span class="icon-bar"></span> 
        </button> 
        <a class="navbar-brand" href="#home"><img src="{{URL::asset('senses/image/logo.png')}}"></a> 
     </div> 
     <div class="collapse navbar-collapse pull-right" id="example-navbar-collapse"> 
        <ul class="nav navbar-nav"> 
           <li><a href="#HOME">HOME</a></li> 
           <li><a href="#ABOUT">ABOUT</a></li>
           <li><a href="#PROMO">PROMO</a></li>  
           <li><a href="#SERVICE">SERVICES</a></li> 
           <li><a href="#PRODUCT">PRODUCTS</a></li>
           <li><a href="#RESERVATION">CONTACT</a></li> 
           <li><a href="#"  data-toggle="modal" data-target="#login">LOGIN</a></li>
           
        </ul> 
     </div> 
  </nav>  
 <section class="section-home" id="HOME">
    <div class="container" style="width: 100%; height: 100%;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; height: 100%;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
             <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
             <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="{{URL::asset('senses/img/thumbnail/SensesRoad1.jpg')}}"  style="width:100%;height: 100%;">
            </div>

            <div class="item">
              <img src="{{URL::asset('senses/img/thumbnail/SensesSapangpalay.jpg')}}"  style="width:100%; height: 100%;">
            </div>
          
            <div class="item">
              <img src="{{URL::asset('senses/img/17.png')}}" alt="New york" style="width:100%; height: 100%;">
            </div>

             <div class="item">
              <img src="{{URL::asset('senses/imgs/portfolio/fullsize/1.png')}}"  style="width:100%; height: 100%;">
            </div>
            <div class="item">
              <img src="{{URL::asset('senses/imgs/portfolio/fullsize/2.png')}}"  style="width:100%; height: 100%;">
            </div>
            <div class="item">
              <img src="{{URL::asset('senses/imgs/portfolio/fullsize/3.png')}}"  style="width:100%; height: 100%;">
            </div>
             <div class="item">
              <img src="{{URL::asset('senses/imgs/portfolio/fullsize/4.png')}}"  style="width:100%; height: 100%;">
            </div>
              <div class="item">
              <img src="{{URL::asset('senses/imgs/portfolio/fullsize/5.png')}}"  style="width:100%; height: 100%;">
            </div>
            <div class="item">
              <img src="{{URL::asset('senses/imgs/portfolio/fullsize/6.png')}}"  style="width:100%; height: 100%;">
            </div>
           
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
  </section>

  <section class="section-about" id="ABOUT">
    <div class="container">
      <div style="padding-top: 50px;text-transform: uppercase!important;color: #093415!important; font-size: 30px; font-weight: bold;">
        ABOUT US
      </div>
      <hr>
      <br><br>
      <div class="row">
        <div class="col-md-5">
          <br>
          <a href="{{URL::asset('senses/img/thumbnail/SensesRoad1.jpg')}}">
            <img src="{{URL::asset('senses/img/thumbnail/SensesRoad1.jpg')}}" class="img-thumbnail" alt="image not available">
          </a>
          <br>
          <caption><strong>
            <em>SENSES MAIN BRANCH</em>
          </strong></caption>
        </div>
        <div class="col-md-6 col-md-offset-1" >
          <br>
          <p style="font-size: 20px; ">
            DGDs SENSES Your Salon and Spa is a locally-established salon mainly located in Rd1 Minuyan Proper San Jose Del Monte, Bulacan. The salon is owned and operated by Dennis David a Marketing and Business Administration graduate with 10 years experience in Corporate Marketing and Sales in Metro Manila.
          </p>
          <br>
          <p style="font-size: 20px;">
          serving the customer with the best of quality and customer service. The salon aims to deliver service that will pamper the customer in achieving a more beautiful and relaxing feeling.DGDs SENSES Your Salon and Spa offers hair treatments, massage, body scrub and many more. The company wants the customers to feel good and look good as well. The salon is not limited to women clientele; in fact most men prefer also the touch of DGDs SENSES Your Salon and Spa to achieve maximum beauty with affordable price. The salon is staffed with well-trained and friendly service provider that will serve the customers with maximum satisfaction. The salon implemented a specialized training for employees that will prepare them in meeting the standards of customers.
          </p>
        </div>
      </div>

    </div>
  </section>

  <section class="section-event" id="PROMO">
    <div class="container">
      <div style="padding-top: 50px;text-transform: uppercase!important;color: #093415!important; font-size: 30px; text-align: center;font-weight: bold;">
        PROMO
      </div>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Date Expired</th>
            <th>Description</th>
          </tr>
        </thead>
        @foreach($newss as $News)
          <tbody>
            <tr>
              <td>{{ $News->date }}</td>
              <td>{{ $News->dateexpired }}</td>
              <td>{{ $News->Description }}</td>
            </tr>
          </tbody>
        @endforeach
      </table>
      <br><br>
      <div class="row">
          <div style="padding-top: 50px;text-transform: uppercase!important;color: #093415!important; font-size: 30px; text-align: center; font-weight: bold;">
        BRANCHES
      </div>
        <hr>
        <div class="col-md-4">
          <h3>ROAD1 MAIN BRANCH </h3>
          <br><br>
          <a href="{{URL::asset('senses/img/thumbnail/SensesRoad1.jpg')}}"><img src="{{URL::asset('senses/img/thumbnail/SensesRoad1.jpg')}}" class="img-thumbnail"></a>
          <br><br>
          <p>
            Address: City Crossing Bldg. Road 1 Minuyan Proper CSJDM Bulacan<br><br>
            Oper Hours: 9:00AM - 8:00PM

          </p>
          <br>
        </div>
        <div class="col-md-4">
          <h3>TUNGKO BRANCH</h3>
          <br><br>
          <a href="{{URL::asset('senses/img/tungko.jpg')}}"><img style="height: 360px;" src="{{URL::asset('senses/img/tungko.jpg')}}" class="img-thumbnail"></a>
          <br><br>
          <p>
          Address: F&E Bldg. Tungkong Mangga CSJDM Bulacan<br><br>
            Oper Hours: 9:00AM - 8:00PM
          </p>
          <br>
        </div>
        <div class="col-md-4">
          <h3>SAPANG PALAY BRANCH</h3>
          <br><br>
          <a href="{{URL::asset('senses/img/thumbnail/SensesSapangpalay.jpg')}}"><img style="height: 360px;" src="{{URL::asset('senses/img/thumbnail/SensesSapangpalay.jpg')}}" class="img-thumbnail"></a>
          <br><br>
          <p>
        Address: Sapang Palay Sampol CSJDM Bulacan<br><br>
         Oper Hours: 9:00AM - 8:00PM
          </p>
          <br>
        </div>
      </div>
    </div>
  </section>

  <section class="section-service" id="SERVICE">
    <div class="contain-service">
      <div class="container">
        <div class="row">
        <div style="padding-top: 50px;text-transform: uppercase!important;color: #093415!important; font-size: 30px; text-align: center;font-weight: bold;">
       OUR SERVICE
      </div>
        <hr>
        <br><br>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="{{URL::asset('senses/img/logos/4.png')}}" class="img-small img-circle">
            <h3 class="text-yellow"><strong>FACE</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#Face">MORE DETAILS</button>
          </div>

           <div id="Face" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Face Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($face as $FACE)
                          <tbody>
                            <tr>
                              <td>{{ $FACE->nameservice }}</td>
                              <td>{{ $FACE->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
           <img src="{{URL::asset('senses/img/logos/1.png')}}" class="img-small">
            <h3 class="text-yellow"><strong>HAIR STYLING</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#HairStyle">MORE DETAILS</button>
          </div>


           <div id="HairStyle" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hairstyle Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($hairstyle as $hair)
                          <tbody>
                            <tr>
                              <td>{{ $hair->servicename }}</td>
                              <td>{{ $hair->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
           <img src="{{URL::asset('senses/img/logos/3.png')}}" class="img-small">
             <h3 class="text-yellow"><strong>HAIR COLOR</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#HairColor">MORE DETAILS</button>
          </div>

            <div id="HairColor" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Haircolor Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($haircolor as $hair)
                          <tbody>
                            <tr>
                              <td>{{ $hair->servicename }}</td>
                              <td>{{ $hair->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

         <div class="col-lg-3 col-md-3 col-sm-12">
           <img src="{{URL::asset('senses/img/logos/5.png')}}" class="img-small">
             <h3 class="text-yellow"><strong>NAIL CARE</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#nailcare">MORE DETAILS</button>
          </div>

           <div id="nailcare" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nail Care Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($nailcare as $nail)
                          <tbody>
                            <tr>
                              <td>{{ $nail->servicename }}</td>
                              <td>{{ $nail->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
          <img src="{{URL::asset('senses/img/logos/3.png')}}" class="img-small">
             <h3 class="text-yellow"><strong>HAIR TREATMENT</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#hairtreatment">MORE DETAILS</button>
          </div>

           <div id="hairtreatment" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hair Treatment Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($hairtreatment as $nail)
                          <tbody>
                            <tr>
                              <td>{{ $nail->servicename }}</td>
                              <td>{{ $nail->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

           <div class="col-lg-3 col-md-3 col-sm-12">
          <img src="{{URL::asset('senses/img/logos/bg1.png')}}" class="img-small">
             <h3 class="text-yellow"><strong>SPA</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#spa">MORE DETAILS</button>
          </div>

          <div id="spa" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">SPA Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($spa as $nail)
                          <tbody>
                            <tr>
                              <td>{{ $nail->servicename }}</td>
                              <td>{{ $nail->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>


        <div class="col-lg-3 col-md-3 col-sm-12">
          <img src="{{URL::asset('senses/img/logos/4.png')}}" class="img-small">
             <h3 class="text-yellow"><strong>WAXING</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#waxing">MORE DETAILS</button>
          </div>

          <div id="waxing" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Waxing Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($waxing as $nail)
                          <tbody>
                            <tr>
                              <td>{{ $nail->servicename }}</td>
                              <td>{{ $nail->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
         <img src="{{URL::asset('senses/img/logos/4.png')}}" class="img-small">
             <h3 class="text-yellow"><strong>SENSES KIDS</strong></h3>
            <hr class="title">
            <p>
            </p>
             <button class="btn btn-lg- btn-service" data-toggle="modal" data-target="#senseskids">MORE DETAILS</button>
          </div>
          

         <div id="senseskids" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Senses Kids Categories</h4>
                      </div>
                        <div class="modal-body" style="padding:40px 50px;">
                      <form role="form">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Service Name</th>
                             <th>Price</th>
                           </tr>
                         </thead>
                        @foreach($senseskids as $nail)
                          <tbody>
                            <tr>
                              <td>{{ $nail->servicename }}</td>
                              <td>{{ $nail->price }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                       </table>
                      </form>
                    </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
            </div>

        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-product" id="PRODUCT">
    <div class="container">
       <div style="padding-top: 50px;text-transform: uppercase!important;color: #093415!important; font-size: 30px; text-align: center;font-weight: bold;">
       OUR PRODUCTS
      </div>
      <hr>
      <center>
        <br><br>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong> DREAM KERATIN</strong></h3>
            <img src="{{URL::asset('senses/image/products/1.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
             Dream Keratin Shampoo and Conditioner...
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i> 599php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>Alfa Parf Lisse</strong></h3>
            <img src="{{URL::asset('senses/image/products/2.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
              Alfa Parf Lisse Design shampoo and conditioner 250ml...

            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i> 999php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>New Icure Argan</strong></h3>
            <img src="{{URL::asset('senses/image/products/3.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
              New Icure Argan Series 300ml
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i>999php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>Maintenance</strong></h3>
            <img src="{{URL::asset('senses/image/products/4.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
              Senses Your Salon and Spa
              Maintenance Treatment 300g and 500g
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i>249php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>Body Scrub</strong></h3>
            <img src="{{URL::asset('senses/image/products/5.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
              Body Scrub 150g
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i>249php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>Massage Oil</strong></h3>
            <img src="{{URL::asset('senses/image/products/6.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
             Massage Oil 120ml
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i>199php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>Fruit Extracts</strong></h3>
            <img src="{{URL::asset('senses/image/products/7.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
              
             Fruit Extracts/Aroma Scalp
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i>249php</button>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12">
            <h3 class="text-yellow"><strong>Vit E Cream</strong></h3>
            <img src="{{URL::asset('senses/image/products/8.jpg')}}" class="img-small img-circle">
            <hr class="title">
            <p>
              Vit E Cream
            </p>
            <button class="btn btn-lg- btn-service"><i class="fa fa-tag"></i>119php</button>
          </div>
      </center>
      </div>
    </div>
  </section>

  <br><br><br>

    <section class="section-reserve" id="RESERVATION">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <hr>
          <h1 class="text-white">SENSES Your Salon and Spa</h1>
          <hr>    
          <p class="text-lead text-white">Salon and Spa</p>
          <p class="text-lead text-white">Make a reservation?<br>Contact us!</p>
        </div>
        <div class="col-md-4">
          <div class="text-left">
            <h4 class="text-left text-white"><i class="fa fa-map-marker"></i> Address:</h4>
              <p class="text-left text-white">
                 Sapang Palay Bulacan
              <br> Rd. 1 San Jose del Monte Bul.
              </p>

            <br><br>

            <h4 class="text-left text-white"><i class="fa fa-phone"></i> Contact Number:</h4>
              <p class="text-left text-white">
              09234234233
              </p>

            <br><br>

            <h4 class="text-left text-white"><i class="fa fa-envelope"></i> Email us:</h4>
              <p class="text-left text-white">
                 <a href="" class="text-white">senses.gmail.com</a><br>
                 <a href="" class="text-white">senses.facebook.com</a>
              </p>
            <hr>
         <h3 class="text-white text-center">
            <a href="https://web.facebook.com/pg/sensesyoursalonandspa/about/?ref=page_internal" class="fa fa-facebook-square"></a>
            <a href="https://twitter.com/" class="fa fa-twitter-square"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
          </h3>
          </div>
        </div>
        <div class="col-md-4">
          <h3 class="text-left text-white" style="font-size: 30px;">location</h3>
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15426.996659730603!2d121.0704400019444!3d14.839329402356974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397af55760389a7%3A0x72c2497c1d63b7a3!2sSENSES+Your+Salon+and+Spa!5e0!3m2!1sen!2sph!4v1512316195059" width="400" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
          <br><br><br>
          
        </div>
      </div>
    </div>
  </section>
<!--modal-->
<div class="modal fade" id="login" tabindex="-1" role="dialog"  
   aria-labelledby="myModalLabel" aria-hidden="true"> 
   <div class="modal-dialog"> 
      <div class="modal-content"> 
         <div class="modal-header"> 
            <button type="button" class="close"  
               data-dismiss="modal" aria-hidden="true"> 
                  <span class="fa fa-times-circle text-green"></span>
            </button> 
            <h4 class="modal-title text-green" id="myModalLabel"> 
               Login 
            </h4> 
         </div> 
         <div class="modal-body"> 
      <form class="form-horizontal" role="form"  class="form-signin" method ="POST" action="/auth/login"> 
        {{csrf_field() }}
                @if (Session::has('mali_tanga'))
                    <div class = "alert alert-danger">
                        <div class = 'text-warning'>
                            {{Session::get('mali_tanga')}}
                        </div>
                    </div>
                @endif
                <span id="reauth-email" class="reauth-email"></span>
         <div class="form-group"> 
            <label for="username" class="col-sm-2 control-label">Username:</label> 
            <div class="col-sm-10"> 
               <input  type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email address" required autofocus > 
            </div> 
            <br><br>
            <label for="password" class="col-sm-2 control-label">Password:</label> 
            <div class="col-sm-10"> 
               <input type="password" id="password" class="form-control" placeholder="Password" required name="password"> 
            </div> 
         </div> 
         <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10"> 
               <button type="submit" class="btn btn-submit btn-block">Sign in</button> 
            </div> 
         </div> 
      </form> 
         </div> 
      </div><!-- /.modal-content --> 
</div><!-- /.modal --> 
        @if(!empty(Session::get('with_errors')) && Session::get('with_errors') == 5)
          <script>
          $(function() {
              $('#login').modal('show');
          });
          </script>
        @endif 
  
  <script src="senses/bootstrap/js/bootstrap.min.js"></script>
</html>