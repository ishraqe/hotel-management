@extends('layout.admin')

@section('title')
Admin's
@endsection
@section('content')
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