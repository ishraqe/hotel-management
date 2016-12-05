<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
 
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/admin.css">
  
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              {{Auth::user()->name}}
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{action('adminController@adminProfile',[Auth::user()->id])}}">Profile</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section id="admin-container">
	
		<div class="row">
			<div class="col-md-3 dash-container">
				<div class="list-group dash-list">
				  <a href="#" class="list-group-item active">
				    Dashboard
				  </a>
				  <a href="{{url('/admin/users')}}" class="list-group-item">User</a>
				  <a href="{{url('/admin/admins')}}" class="list-group-item">Admin</a>
				  <a href="{{url('admin/room')}}" class="list-group-item">Room</a>
				  <a href="{{url('admin/roomtype')}}" class="list-group-item">Room type</a>
          <a href="#" class="list-group-item">Review</a>
				</div>
			</div>
			<div class="col-md-9">
        <section>
            <div class="container content-container" style="background-color: white">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success flash" id="#flash">{{Session::get('flash_message')}}</div>
                @endif

            </div>
        </section>
				@yield('content')
			</div>
		</div>

</section>

<script type="text/javascript" src="/js/jquery2.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
@if (!empty($adminAddsuccess)) 
  <script type="text/javascript">
      $(document).ready(function(){
        $(".makeAdminCollapsed").click(function(){
        $(".makeAdminCollapsedBody").collapse('show');
        
        });
      }); 

</script>    
@endif

<script type="text/javascript">
  $('#confirmAdminPassword').on('keyup', function () {
    if ($(this).val() == $('#adminPassword').val()) {
        $('#ConfirmPasswordMessage').html('Password matched').css('color', 'green');
    } else $('#ConfirmPasswordMessage').html('Password didn\'t matched').css('color', 'red');
});
</script>

<script>
  $(document).ready(function(){
      $('.flash').delay(3000).slideUp(300);
      console.log('hello');
   });


</script>
</body>
</html>