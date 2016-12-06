<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<title>GreenDream</title>
<link href="favicon.png" rel="shortcut icon">

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
@include('partials.login-signup')

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


@if($actual_link =='contact')
  <header class="int-header {{$actual_link}}">
    @if(Session::has('flash_message'))
      <div class="alert alert-success flash" id="#flash">{{Session::get('flash_message')}}</div>
    @endif
@elseif($actual_link == '/')
  <header class="home-slider-header">
    @if(Session::has('flash_message'))
      <div class="alert alert-success flash" id="#flash">{{Session::get('flash_message')}}</div>
    @endif
@else
  <header class="int-header bg-1">
    @if(Session::has('flash_message'))
      <div class="alert alert-success flash" id="#flash">{{Session::get('flash_message')}}</div>
    @endif
@endif
  <nav class="navbar navbar-default">
    @if(Session::has('flash_message'))
      <div class="alert alert-success flash" id="#flash">{{Session::get('flash_message')}}</div>
    @endif

    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"> <img src="images/logo.png" alt="Image"> </a> </div>
      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
          <li class="login"><a href="#login-box" class="fancybox" data-target="#loginModal" data-toggle="modal">Login</a></li>
        @endif
          
          <li class="dropdown header-language"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/flag-en.svg" alt="Image"></a>
            <div class="dropdown-menu" role="menu">
              <div class="continent">
                <h6>The Americas</h6>
                <ul>
                  <li class="selected"><img src="images/flag-en.svg" alt="Image"><a href="#">United States</a></li>
                  <li><img src="images/flag-ca.svg" alt="Image"><a href="#">Canada</a> </li>
                  <li><img src="images/flag-br.svg" alt="Image"><a href="#">Brasil </a></li>
                  <li><img src="images/flag-ch.svg" alt="Image"><a href="#">Chile</a></li>
                </ul>
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
          <li class="dropdown"> <a class="" href="{{url('/')}}">Home<span></span></a>
            
          </li>
          <li><a href="{{url('/about')}}">About  Us<span></span></a></li>
          <li><a href="{{url('/rooms')}}">Rooms<span></span></a></li>
          <li><a href="{{url('/facilities')}}">Facilities<span></span></a></li>
          <li class="dropdown"> <a class="dropdown-toggle" href="#">Pages<span></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/help')}}">Help Center</a></li>
              <li><a href="{{url('/gallery')}}">Gallery</a></li>
              <li><a href="404.html">404 Page</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
            </ul>
          </li>
          <li><a href="{{secure_url('/blog')}}">Blog<span></span></a></li>
          <li><a href="{{secure_url('/contact')}}">Contact<span></span></a></li>
         
             
        </ul>
      </div>
      <!-- end navbar-collapse --> 
    </div>
    <!-- end container --> 
  </nav>
  <!-- navbar-nav -->
 
  
  
  @if($actual_link == 'contact')
  <div id="map"></div>
  @elseif($actual_link == '/')
   <div class="ver-middle">
    <div class="inner">
      <div class="container">
        <h1 class="booking-title">Book your best room</h1>
          @include('partials.booking-form')
      </div>
      <!-- end container --> 
    </div>
    <!-- end inner --> 
  </div>

  @else
  <div class="ver-middle">
    <div class="inner">
      <h1>{{ ucfirst($actual_link) }}</h1>
    </div>
  </div>
  @endif
</header>
@yield('content')

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12"> <img src="images/footer-logo.png" alt="Image" class="logo">
        <dl class="contact-infos">
          <dt>Phone & E-mail:</dt>
          <dd>+3230-45-45-67</dd>
          <dd><a href="#">greendream@gmail.com</a></dd>
        </dl>
        <dl class="contact-infos">
          <dt>Address:</dt>
          <dd>4b Long Street, Miami, USehgqhegqehqeghqeghgeqA</dd>
        </dl>
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h4 class="footer-title">Explore</h4>
        <ul class="footer-menu">
          <li><a href="rooms.html">Rooms</a></li>
          <li><a href="facilities.html">Facilities</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about-us.html">About Us</a></li>
        </ul>
        <ul class="footer-menu">
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="help-center.html">FAQ</a></li>
        </ul>
      </div>
      <!-- end col-4 -->
      <div class="col-md-4">
        <h4 class="footer-title">Get our newsletter</h4>
        <form class="newsletter">
          <input type="text" placeholder="Your e-mail address">
          <button type="submit"><span>Send</span> <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </form>
        <ul class="footer-social">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-6"><span class="copyright"> © All rights reserved. GreenDream </span></div>
        <!-- end col-6 -->
        <div class="col-xs-6"> <span class="footer-search"><img src="images/icon-search.png" alt="Image" class="search-btn"></span>
          <div class="dropdown footer-language"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/flag-en.svg" alt="Image"> ENGLISH</a>
            <div class="dropdown-menu" role="menu">
              <div class="continent">
                <h6>The Americas</h6>
                <ul>
                  <li class="selected"><img src="images/flag-en.svg" alt="Image"><a href="#">United States</a></li>
                  <li><img src="images/flag-ca.svg" alt="Image"><a href="#">Canada</a> </li>
                  <li><img src="images/flag-br.svg" alt="Image"><a href="#">Brasil </a></li>
                  <li><img src="images/flag-ch.svg" alt="Image"><a href="#">Chile</a></li>
                </ul>
              </div>
              <!-- end continent -->
              <div class="continent">
                <h6>Europe</h6>
                <ul>
                  <li><img src="images/flag-uk.svg" alt="Image"><a href="#">United Kingdom </a></li>
                  <li><img src="images/flag-sp.svg" alt="Image"><a href="#">Spain </a></li>
                  <li><img src="images/flag-it.svg" alt="Image"><a href="#">Italy </a></li>
                  <li><img src="images/flag-pl.svg" alt="Image"><a href="#">Polond</a></li>
                  <li><img src="images/flag-fr.svg" alt="Image"><a href="#">France </a></li>
                  <li><img src="images/flag-ua.svg" alt="Image"><a href="#">Ukraine</a></li>
                </ul>
              </div>
              <!-- end continent --> 
            </div>
            <!-- end dropdown-menu --> 
          </div>
          <!-- end footer-language --> 
        </div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end sub-footer --> 
</footer>
<!-- end site-footer --> 

<!-- jQuery FILES --> 

<script src="js/main.js"></script>
<!--   @if (!$errors->loginErrors->isEmpty()) -->
    
       

<!-- <script type="text/javascript">
    $(window).load(function(){
        $('#login-box').modal('show');
    });
</script> -->
   
<!--  @endif -->



  
<script>
          $(document).ready(function(){
            $('.flash').delay(3000).slideUp(300);
            console.log('hello');
          });


</script>



</body>
</html>