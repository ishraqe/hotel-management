@if(! count($admin))
                <div class="alert alert-info" role="alert">
                    No, Admin found.
                </div>
   		 @else
	       	<table class="table table-bordered" id="table_admin">
	                <thead>
	                <tr>
	                    <th>Index</th>
	                    <th>Name</th>
	                    <th>Type</th>
	                   
	                    @if(Auth::user()->admin_type ==1)
	                   	 <th>Delete</th>
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
    	                    	<td><a href="{{action('adminController@adminDelete',[encrypt($admins->id)])}}">Delete</a></td>
	                    	    @endif
                        @endif

	                </tr>
	                <tr>

	                @endforeach
	                </tbody>
	            </table>
	        @endif  