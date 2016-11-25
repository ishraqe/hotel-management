<form action="{{url('/admin/register')}}" method="post" id="registerForm">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                           <label id="name">Username</label>

                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
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
                        <input class="form-control" id="adminPassword" type="password" name="password">
                        @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Confirm Password</label>
                        <input class="form-control" id="confirmAdminPassword" type="password" name="Confirmpassword"><span id='ConfirmPasswordMessage'></span>
                        @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <select class="custom-select form-control" name="admin_type">
                          <option selected>Admin type</option>
                        
                            <option value="1">User Admin</option>
                            <option value="2">Room Admin</option>
                            <option value="3">Review Admin</option>
                        
                        </select>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-success">Add new user</button>
                      </div>

                       
              <!-- end form-group -->       
            </form>