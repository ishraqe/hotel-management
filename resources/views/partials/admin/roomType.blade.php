@if(! count($roomType))
                <div class="alert alert-info" role="alert">
                    No, Room found!!.
                </div>
   		 @else
	       	<table class="table table-bordered text-center" id="table_admin">
	                <thead>
	                <tr>
	                    <th>Index</th>
	                    <th>Type</th>
	                    <th>Price</th>
	                    <th>Bed</th>
	                    <th>Sofa</th>
	                    <th>Size</th>
	                    <th>Descripion</th>
	                    <th>Image</th>
	                    <th>Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr class="text-center">

	                    @foreach($roomType as $roomTypes)
	                        <td>{{$index++}}</td>
	                        <td>{{ucfirst($roomTypes->type)}}</td>
	                        <td>{{ucfirst($roomTypes->price)}}</td>
	                        <td>{{ucfirst($roomTypes->bed)}}</td>
	                        <td>{{ucfirst($roomTypes->sofa)}}</td>
	                        <td>{{ucfirst($roomTypes->size)}}</td>
	                        <td>{{ucfirst($roomTypes->room_description)}}</td>

	                        <td><img src="{{$roomTypes->room_image}}"></td>
	                        <td> <a href="{{action('roomTypeController@editRoomType',[$roomTypes->id])}}" class="btn btn-default">Edit</a> <a href="{{action('roomTypeController@deleteRoomType',[$roomTypes->id])}}" class="btn btn-delete">Delete</a></td>


	                </tr>
	                

	                @endforeach
	                </tbody>

	            </table>
	        @endif  