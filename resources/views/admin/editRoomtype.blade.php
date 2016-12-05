@extends('layout.admin')
@section('title')
Edit Room type
@endsection
@section('content')

<div class="row editImageField">
<form action="{{action('roomTypeController@editRoomType',[encrypt($roomType->id)])}}" method="post" enctype="multipart/form-data" >	
		<div class="col-md-6">
			<input name="_token" type="hidden" value="{{ csrf_token() }}">



                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                       <label id="price">Room Price</label>

                        <input class="form-control" type="text" name="price"  value="{{ $roomType->price }}">

                        @if ($errors->has('price'))
                          <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                          </span>
                        @endif
                   </div>
                  <!-- end form-group -->
                  <div class="form-group {{ $errors->has('guestCapacity') ? ' has-error' : '' }}">
                    <label>Guest Capacity</label>
                    <input class="form-control" type="text" name="guestCapacity" value="{{ $roomType->guest }}">
                    
                    @if ($errors->has('guestCapacity'))
                      <span class="help-block">
                          <strong>{{ $errors->first('guestCapacity') }}</strong>
                      </span>
                    @endif
                  </div>
                  <!-- end form-group -->
                  <div class="form-group {{ $errors->has('bed') ? ' has-error' : '' }}">
                    <label>Bed no: </label>
                    <input class="form-control" type="text" name="bed" value="{{$roomType->bed}}">
                    @if ($errors->has('bed'))
                      <span class="help-block">
                          <strong>{{ $errors->first('bed') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-group">
                  	<label>Old image</label>
                  	<img src="{{$roomType->room_image}}">
                  </div>
		</div>
		<div class="col-md-6">
			 <div class="form-group {{ $errors->has('sofa') ? ' has-error' : '' }}">
                    <label>Sofa no: </label>
                    <input class="form-control" type="text" name="sofa" value="{{$roomType->sofa}}">
                    @if ($errors->has('sofa'))
                      <span class="help-block">
                          <strong>{{ $errors->first('sofa') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }}">
                    <label>Size </label>
                    <input class="form-control" type="text" name="size" value="{{$roomType->size}}">
                    @if ($errors->has('size'))
                      <span class="help-block">
                          <strong>{{ $errors->first('size') }}</strong>
                      </span>
                    @endif
                  </div>


                  <div class="form-group {{ $errors->has('room_description') ? ' has-error' : '' }}">
                    <label>Descripion </label>
                    
                    <textarea class="form-control" type="text" name="room_description" value="" >{{$roomType->room_description}}</textarea>
                    @if ($errors->has('room_description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('room_description') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-group">
                  	<label>
					            Add new image
				     </label>
				     <input type="file"  name="room_image">
                  </div>
		</div>
		
                    

                 	
                 <!-- end form-group -->
                  

          <!-- end form-group -->
        <div class="form-group">
            <button type="submit" class="btn btn-default btn-lg btn-block">Add</button>
        </div>  
     
    </form>
</div>


@endsection