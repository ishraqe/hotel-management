<!DOCTYPE html>
<html>
<head>
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body style="background: black;">


	<div class="container" style="margin-top: 90px;">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                      <h1 class="text-center">Sign in</h1>
                    <div style="padding-top:30px" class="panel-body" >

                         @if(Session::has('login_message'))
                                <div  id="login-alert" class="alert alert-danger login_error col-sm-12">
                                    {{Session::get('login_message')}}
                                </div>
                            @endif

                        
                 
                        <form action="{{url('/admin/login')}}" method="post" id="loginform" class="form-horizontal" role="form">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon">
                                	<i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                 <input id="login-username" type="text" class="form-control" name="email" value="{{old('email')}}" placeholder=" email">
                                @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                @endif                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon">
                                	<i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" class="btn btn-success">Login  </button>

                                    </div>
                                </div>
                        </form>            
                        </div>                     
                    </div>  
        </div>
    </div>
</body>
</html>    
