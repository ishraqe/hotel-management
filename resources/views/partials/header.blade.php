<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<title>GreenDream</title>




<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link href="css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="login-box">
  <div class="left-side">
    <h3>Save 50%</h3>
    <h5>on the family rooms</h5>
  </div>
  <!-- end left-side -->
  <div class="right-side">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">SIGN UP</a></li>
      <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">LOGIN</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane" id="signup">
        <form>
          <div class="form-group">
            <label>Name</label>
            <input type="text">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>E-mail</label>
            <input type="text">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <button type="submit" class="btn-orange-large">Sign Up</button>
          </div>
          <!-- end form-group -->
          <div class="or">or sign up with</div>
          <div class="social-buttons"> <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a> <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a> </div>
          <!-- end social-buttons -->
        </form>
      </div>
      <div role="tabpanel" class="tab-pane active" id="login">
        <form>
          <div class="form-group">
            <label>Username</label>
            <input type="text">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password">
            <a href="#" class="forget">Forget ?</a> </div>
          <!-- end form-group -->
          <div class="form-group">
            <button type="submit" class="btn-orange-large">Login</button>
          </div>
          <!-- end form-group -->
          <div class="or">or login with</div>
          <div class="social-buttons"> <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a> <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a> </div>
          <!-- end social-buttons -->
        </form>
      </div>
      <!-- end login --> 
    </div>
    <!-- end tab-content --> 
  </div>
  <!-- end right-side --> 
</div>
<!-- end login-box -->
<div class="search-box"> <span class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></span>
  <div class="container">
    <form>
      <i class="fa fa-search" aria-hidden="true"></i>
      <input type="text" placeholder="Type your text" autofocus>
    </form>
  </div>
  <!-- end container --> 
</div>
<!-- end search-box -->
<header class="home-slider-header">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
          <span class="sr-only">Toggle navigation
            </span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
          </button>
        <a class="navbar-brand" href="index.html"> <img src="images/logo.png" alt="Image"> </a>
      </div>
      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="login"><a href="#login-box" class="fancybox">Login</a></li>
          <li class="dropdown header-language"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/flag-en.svg" alt="Image"></a>
            <div class="dropdown-menu" role="menu">
              <div class="continent">
                <h6>The Americas</h6>
               
              </div>
              <!-- end continent -->
              <div class="continent">
                <h6>Europe</h6>
               
              </div>
              <!-- end continent --> 
            </div>
            <!-- end dropdown-menu --> 
          </li>
          <li><a href="#" class="search-btn"><img src="images/icon-search.png" alt="Image"></a> </li>
        </ul>
        <ul class="nav main-menu navbar-nav navbar-right">
          <li class="dropdown"> <a class="dropdown-toggle" href="#">Home<span></span></a></li>
          <li><a href="#">About  Us<span></span></a></li>
          <li><a href="#">Rooms<span></span></a></li>
          <li><a href="#">Facilities<span></span></a></li>
          <li class="dropdown"> <a class="dropdown-toggle" href="#">Pages<span></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">404 Page</a></li>
              <li><a href="#">Coming Soon</a></li>
            </ul>
          </li>
          <li><a href="#">Blog<span></span></a></li>
          <li><a href="#">Contact<span></span></a></li>
        </ul>
      </div>
      <!-- end navbar-collapse --> 
    </div>
    <!-- end container --> 
  </nav>
@include('partials.booking-form')

</header>  