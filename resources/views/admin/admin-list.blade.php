@extends('layout.admin')

@section('title')
Admin's
@endsection
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
  <div class="row">
    <div class="col-md-10">
      <h3 class="panel-title">Session timeout time</h3>
    </div>
    <div class="col-md-2">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
            Change
        </button>
    </div>
  </div>
  <div style="color: black" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-inline" action="{{action('adminController@changeSession',[encrypt($sessionTime[0]->id)])}}" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Change session time </h4>
        </div>
        <div class="modal-body" style="color: black">
            
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label for="exampleInputName2">Admin</label>
                  <input class="form-control" type="number"  name="session_time_for_admin" value="{{($sessionTime[0]->session_time_for_admin)/60}}">             
                </div>
                <div class="form-group">
                  <label for="availability">User</label>
                  <input type="text" type="number" class="form-control" value="{{($sessionTime[0]->session_time_for_user)/60}}" name="session_time_for_user">
                </div>
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>   
    </div>
  </div>
</div>
    
  </div>
  <div class="panel-body">
   <table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>For Admin (minutes)</th>
      <th>For Customers (minutes)</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($session as $sessions)
    <tr>
      <th scope="row">{{$index++}}</th>
      <td>{{($sessions->session_time_for_admin)/60}} </td>
      <td>{{($sessions->session_time_for_user)/60}} </td>      
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Admins list
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	@include('partials/admin/adminList')  
      </div>
    </div>
  </div>


  <div class="panel panel-default" >
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed makeAdminCollapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Make new Admin
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse makeAdminCollapsedBody" role="tabpanel" aria-labelledby="headingTwo">
      
          <div class="panel-body">
            	     @include('partials/admin/register')


          </div>
        </div>
   
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Distribute role
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
          @if(! count($admin))
                <div class="alert alert-info" role="alert">
                    No, Admin found.
                </div>
          @else
            <form action="{{url('distributeRole')}}" method="post">
              <input type="" name="">
           
              <table class="table table-bordered" id="table_admin">
                    <thead>
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Type</th>
                       
                        @if(Auth::user()->admin_type ==1)
                         <th>Distribute role</th>
                        @endif
                       
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        @foreach($admin as $admins)
                            <td>{{$index++}}</td>

                            <td>{{ucfirst($admins->name)}}  {{$admins->image}}</td>
                            <td>
                              @if($admins->admin_type==1)
                                super
                              @elseif($admins->admin_type==2)
                                User admin
                              @elseif($admins->admin_type==3)
                                Room admin
                              @endif


                            </td>

                            @if(Auth::user()->admin_type ==1)
                              @if($admins->id != Auth::user()->id)
                              <td>
                                <select class="custom-select form-control" name="admin_type">
                                    <option selected>Admin type</option>
                                    <option value="1">User Admin</option>
                                    <option value="2">Room Admin</option>
                                    <option value="3">Review Admin</option>
                                </select>
                              </td>
                              @endif
                          @endif

                    </tr>
                    <tr>

                    @endforeach
                    </tbody>
                </table>
            </form>  
          @endif  
      </div>
    </div>
  </div>  
</div>


@endsection