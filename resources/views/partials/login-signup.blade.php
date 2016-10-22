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

        <form action="{{url('/register')}}" method="post" id="registerForm">
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label id="name">Username</label>

            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            @if ($errors->has('username'))
              <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label>E-mail</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}">
         
            @if ($errors->has('email'))
              <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <label>Password</label>
            <input class="form-control" type="password" name="password">
            @if ($errors->has('password'))
              <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
          </div>

          <!-- end form-group -->
          <div class="form-group">
            <button type="submit" class="btn-orange-large">Sign Up</button>
          </div>

          <!-- end form-group -->
          {{--<div class="or">or sign up with</div>--}}
          {{--<div class="social-buttons"> <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a> <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a> </div>--}}
          <!-- end social-buttons -->
        </form>
      </div>
      <div role="tabpanel" class="tab-pane active" id="login">

        
        <form action="{{ url('/login')}}" method="post">
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
         <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label>E-mail</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}">
         
            @if ($errors->has('email'))
              <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
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