@extends('layout.admin')

@section('content')

 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Register new Admin 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Admin
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               <div class="row">
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
          
     
        </form>
               </div>

                


    </div>
            <!-- /.container-fluid -->

</div>

@endsection