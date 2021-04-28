   <!--Navigation container, includes the links ---->
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <h2 style="margin-right: 40px; padding-top: 10px;"><a class="navbar-brand" href="{{url('/')}}">LOGO</a></h2>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link p-2 font-weight-bold text-white" href="#"> About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 font-weight-bold text-white" href="#">Programmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold p-2 text-white" href="#">Cohorts</a>
          </li>
             <li class="nav-item">
            <a class="nav-link font-weight-bold p-2 text-white" href="#">Gallery</a>
          </li>   
        </ul>     
       <a class="btn btn-round-xs btn-xs btn-success " href="{{route('login')}}" style="color: #fff ;background-color: #333333; border-radius: 11px;
        padding-left: 10px;margin-right: 10px;">Sign In</a> 
          <a class="btn btn-round-xs btn-xs btn-success " href="javascript::()" style="color: #fff ;background-color: #333333; border-radius: 11px;
        padding-left: 10px;"> Register</a>    
      </div>
      </div>
    </nav>
    <!--End of the navigation -->