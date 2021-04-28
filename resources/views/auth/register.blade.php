<!--import the links from the web -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--Doctype for the page -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Frontend Design Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
       
        <!--Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
       <script async defer src="https://buttons.github.io/buttons.js"></script>

      <!--Styles -->
        <link rel="stylesheet" type="text/css" href="css/welcome.css">
        <style type="text/css">
                @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
        </style>      
    </head>
    <body>
      <!-- navbar starts -->
       @include('layouts.navigation')
      <!-- nav bar ends -->
  <!--Jumbtron --> 
  <div class="jumbotron jumbotron-odi-hero bg-success" style="height: 40%;">
  <div class="jumbotron-overlay ">
      <div class="container jumbotron-padding  text-left">
      <h1 class="display-4">Programmes</h1>

      </div>
    </div>
</div>
<!--End of Jumbtron -->
   <body>
    <!--Section for Video play -->
     <div class="container section">
          <div class="row" id="section-one">
            <div class="col-md-6">
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                    </p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen  style=" margin-top: -170px; width: 100%; height: 100%;">
                  </iframe>
                </div>
                </div>
               </div>
                <!--End of section -->
                <!--"Timelines for programmes-->
                <div class="container">
                 <div class="row">
                    <ul class="timeline">
                      <li>
                        <p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                      </li>
                      <hr>
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </li>
                       <hr>
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </li>
                       <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </li>
                       <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </li>
                       <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </li>
                       <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </li>
                    </ul>
                  </div>

                </div>
                <!--End of Timelines -->
                        <!--Start for Program Activities  -->       
                           <div class="container section" style="margin-top: 30px;">
                          <div class="col-12 col-md-9">
                              <h5 class="text-dark"><b>Programmes Activities</b></h5>
                            <div class="row no-gutters" style="align-items: center;">
                              <!--Start of col -->
                                    <div class="col-md-6 col-lg-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                        <li>
                                           <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                        <li>
                                           <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                      </ul>
                                     </div>
                                      <!--end of col-->
                                        <div class="col-md-6 col-lg-3">
                                         <ul class="list-unstyled">
                                        <li>
                                            <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                        <li>
                                           <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                        <li>
                                          <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>

                                        </ul>
                                      </div>
                                       <!--end of col-->
                                         <div class="col-md-6 col-lg-3">
                                        <ul class="list-unstyled">
                                        <li>
                                          <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                        <li>
                                         <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>
                                        <li>
                                        <a href="#" class="text-dark"><i class="fa fa-star" aria-hidden="true"></i> Activity Here</a>
                                        </li>

                                    </ul>
                                </div>
                                <!--end of col-->
                                <!--end of col-->
                            </div>
                            <!--end of row-->
                        </div>         
                        </div>
                        <!--Section for joining -->
                         <section class="text-light py-5 mt-5" style="background-color: rgb(239,239,239); margin-bottom: -50px;">
                          <div class="container ">
                            <div class="row col-md-12">
                                <div class="col-md-2">
                                 <h4 class="text-dark"><strong>Why Join ?</strong></h4>
                                </div>
                                <div class="col-md-6" style="">
                                    <p class="text-dark">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..
                                    </p>
                                </div>
                                   <div class="col-md-4">
                                  <a class="btn btn-round-xs btn-xs btn-success " href="{{route('programmes')}}" style="color: #fff ;background-color: #333333; border-radius: 11px;
                                    padding-left: 10px;margin-right: 10px;">Register</a> 
                                </div>

                            </div>
                        </div>
                    </section>
                    <!--End of the section -->
                   </div>
<!-- footer start -->
    @include('layouts.footer')   
    </ul>
<!-- footer end -->
   
    </body>
</html>
