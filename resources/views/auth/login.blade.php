<!-- HEADER =============================-->
  @include('layouts.header')
<body>
  <!-- NAVIGATION =============================-->
  @include('layouts.navigation')
   <body>
      <div class="space-medium" style="margin-top: 40px; margin-bottom: 340px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12" style="margin-top: 50px;">
                    <div class="feature-block-v7 feature-block">
                        <div class="feature-icon text-brand bg-brand-light mb-5">                       
                        </div>
                          <!-- ERROR =============================-->
                         @if (Session::has('error'))
                                 <div class="alert alert-danger">{{ Session::get('error') }}</div>
                          @endif
                           <!--FORM =============================-->                                                 
                <div class="feature-content">
                  <div class="panel panel-info" >
                  <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         <!--Sign In Form -->                         
                        <form id="loginbox"class="form-horizontal" role="form" method="post" action="{{route('login')}}">
                            @csrf                                 
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email address" required="required">     </div>                                
                                 <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                     <input id="login-password" type="password" class="form-control" name="password" placeholder="create password" required="required">
                                    </div>                                                          
                                     <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                           </label>
                                            </div>
                                              </div>
                                         <div style="margin-top:10px" class="form-group">
                                         <div class="col-sm-12 controls">
                                            <button type="submit" class="btn btn btn-success" style="border-radius: 55px; border: none; color: #fff;">
                                                  Log In
                                                </button>
                                            <a id="btn-fblogin" href="{{ url('auth/google') }}" class="btn btn-danger" style="  border: none;
                                            border-radius: 55px;
                                            color: #fff; margin-top: 10px; margin-bottom: 10px;"><i class="fa fa-google">Login with Google</i></a>
                                            </div>
                                            </div>
                                           <div class="form-group">
                                               <div class="col-md-12 control">
                                                  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                  <a class="text-dark" href="#" style="margin-right: 10px;">Forgot password?</a> | 
                                                  <a class="text-dark" href="javascript::()" style="margin-left: 10px;">
                                                      Register
                                                  </a>
                                        </div>
                                    </div>
                                </div>
                                <!--End of the links -->    
                            </form>  
                            <!--Login form ends here -->   
                        </div>  
                    </div> 
                  </div>
                 </div>
                </div>
                <!-- IMAGE =============================-->
                <div class="offset-xl-1 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="feature-app-img">
                    <img src="images/student.jpg" alt="App Landing Page Template - Quanto" style="margin-top: 80px; width: 100%; height: 340px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- FOOTER =============================-->
    @include('layouts.footer')
    </body>
</html>
