@extends('layout.admin')
@section('title')
Profile
@endsection
@section('content')

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Profile Info
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
	       	<table class="table table-bordered " id="table_admin">
	                <thead>
	                <tr>
	                    <th>Index</th>
	                    <th>Name</th>
	                    <th>Image</th>
                      	<th>Member since</th>
	                 	

	                </tr>
	                </thead>
	                <tbody>
		                <tr>  
		                    <td>{{$index++}}</td>
	                        <td>{{ucfirst($adminProfile->name)}}</td>
	                        <td>{{$adminProfile->image}}</td>
	                        <td>{{date_format(date_create("$adminProfile->created_at"),"d/m/Y ")}}</td>
		                </tr>
		                <tr>

	               
	                </tbody>
	        </table>
	        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Edit Info
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      		<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$adminProfile->email}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$adminProfile->name}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{($adminProfile->password)}}">
			  </div>
			  
			  <div class="form-group">
			  	<div class="row">
			  		<div class="col-md-6">
			  			your old image{{ $adminProfile->image }}
			  		</div>
			  		<div class="col-md-6">
			  			<label for="exampleInputFile">File input</label>
			    		<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
			  		</div>
			  	</div>
			    
			  </div>
			  
			 
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>  	
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