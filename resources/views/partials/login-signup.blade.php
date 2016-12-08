<div id="login-box">
 
  <div class="left-side">
    <h3>Save 50%</h3>
    <h5>on the family rooms</h5>
  </div>
  <!-- end left-side -->
  <div class="right-side">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">SIGN UP</a></li>
      <li role="presentation"  class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">LOGIN</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane " id="signup">
        <form action="{{url('/register')}}" method="post" id="registerForm">
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label >Username</label>
             <small class="login_input show-example1" id="username-input-msg-slide"> 
              <ul>
                <li>-The first character must be a letter.</li>
                <li>-Numbers and the underscore may be used</li>
                <li>-at least 5 characters and no more than 10 characters</li>
              </ul>
            </small> 

            <input id="login_name" class="form-control hintable" hint-class="show-example1" type="text" name="name" value="{{ old('name') }}">
            
            @if ($errors->has('name'))
              <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label>E-mail</label>

            <small id="email-input-msg-slide" class="login_input show-example2"> E-mail should be valid</small>
            <input id="login_mail"  class="form-control hintable" hint-class="show-example2" type="text" name="email" value="{{ old('email') }}">
            
            @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <label>Password</label> <small id="password-input-msg-slide" class="login_input show-example3"> 
                <ul>
                  <li>One uppercase letter one lower case letter , one number and one special character (!,@,#,$ etc)</li>
                </ul>
             </small>
            <input id="login_password" class="form-control hintable" hint-class="show-example3"type="password" name="password">
           
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
         
        </form>
      </div>
      <div role="tabpanel" class="tab-pane active" id="login">
        @if (!$errors->loginErrors->isEmpty())
            <div class="form_error_login">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->loginErrors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
          @endif

        <form action="{{ url('/login')}}" method="post">
          <input name="_token" type="hidden" value="{{ csrf_token() }}">

         <div class="form-group {{ $errors->loginErrors->first('email') ? ' has-error' : '' }}">
            <label>E-mail</label>
            <input class="form-control" type="text" name="email"  >
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required="">
             </div>
          <!-- end form-group -->
          <div class="form-group">
            <button type="submit" class="btn-orange-large">Login</button>
          </div>
          <!-- end form-group -->
          
          @if(Session::has('login_flash_message'))
            <strong>There is something wrong with your credientials</strong>
          @endif
          
              
          <!-- end social-buttons -->
        </form>
      </div>
      <!-- end login --> 
    </div>
    <!-- end tab-content --> 
  </div>
  <!-- end right-side --> 
</div>
