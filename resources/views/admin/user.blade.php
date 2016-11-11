@extends('layout.admin')
@section('title')
	User's
@endsection
@section('content')
	
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Users list
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	@if(! count($user))
                <div class="alert alert-info" role="alert">
                    No, user found.
                </div>
   		 @else
	       	<table class="table table-bordered " id="table_admin">
	                <thead>
	                <tr>
	                    <th>Index</th>
	                    <th>Name</th>
                      <th>Member since</th>
	                    <th>Delete</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>

	                    @foreach($user as $users)
	                        <td>{{$index++}}</td>
                          <td>{{ucfirst($users->name)}}</td>
                          <td>{{date_format(date_create("$users->created_at"),"d/m/Y ")}}</td>
	                        <td><a href="">Delete</a></td>


	                </tr>
	                <tr>

	                @endforeach
	                </tbody>
	            </table>
	        @endif    
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Pending User's
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        	@if(!count($pendingUser))
        		<h1>No, pending users</h1>
        	@else
        		<table class="table table-bordered" id="table_admin">
                <thead>
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Make active</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    @foreach($pendingUser as $pendingUsers)
                        <td>{{$index++}}</td>
                        <td>{{ucfirst($pendingUsers->name)}}</td>
                        <td><a href="{{action('adminController@makeUserActive',[encrypt($pendingUsers->id)])}}"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                        <td><a href="">Delete</a></td>


                </tr>
                <tr>

                @endforeach
                </tbody>
            </table>
        	@endif
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>


	

@endsection