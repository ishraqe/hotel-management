
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
    @include('partials.login-signup')
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