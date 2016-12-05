@if(! count($room))
                <div class="alert alert-info" role="alert">
                    No, Room found.
                </div>
   		 @else
	       	<table class="table table-bordered" id="table_admin">
	                <thead>
	                <tr>
	                    <th>Index</th>
	                    <th>Type</th>
	                    <th>Availability</th>
	                    <th>Action</th>
	                   
	                    <!-- @if(Auth::user()->admin_type ==1)
	                   	 <th>Delete</th>
	                    @endif -->
	                   
	                </tr>
	                </thead>
	                <tbody>
	                <tr>

	                    @foreach($room as $rooms)
	                        <td>{{$index++}}</td>
	                        <td>
	                        	@if($rooms->room_type==1)
	                        		Single
	                        	@elseif($rooms->room_type==2)
	                        		Family
	                        	@else
	                        		Delux
	                        	@endif

	                        </td>
	                        <td>
	                        	@if($rooms->availability)
	                        		Available
	                        	@else
	                        		Not available
	                        	@endif	
	                        </td>    
	                        <td>
		                        <a href="{{action('roomController@editRoom',[encrypt($rooms->id)])}}" class="btn btn-default">Edit</a> 
		                        <a href="{{action('roomController@deleteRoom',[encrypt($rooms->id)])}}" class="btn btn-delete">delete</a>
	                        </td>
	                </tr>
	                <tr>

	                @endforeach
	                </tbody>
	            </table>
	        @endif  