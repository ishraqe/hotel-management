	<form action="{{url('/admin/addRoomType')}}" method="post" enctype="multipart/form-data" >
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <select class="custom-select form-control" name="type">
                          <option selected>Room type</option>
                        
                            <option value="1">Single</option>
                            <option value="2">Family</option>
                            <option value="3">Delux</option>
                        
                        </select>
                      </div>


                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                       <label id="price">Room Price</label>

                        <input class="form-control" type="text" name="price" value="{{ old('price') }}">

                        @if ($errors->has('price'))
                          <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                          </span>
                        @endif
                   </div>
                  <!-- end form-group -->
                  <div class="form-group {{ $errors->has('guestCapacity') ? ' has-error' : '' }}">
                    <label>Guest Capacity</label>
                    <input class="form-control" type="text" name="guestCapacity" value="{{ old('guestCapacity') }}">
                    
                    @if ($errors->has('guestCapacity'))
                      <span class="help-block">
                          <strong>{{ $errors->first('guestCapacity') }}</strong>
                      </span>
                    @endif
                  </div>
                  <!-- end form-group -->
                  <div class="form-group {{ $errors->has('bed') ? ' has-error' : '' }}">
                    <label>Bed no: </label>
                    <input class="form-control" type="text" name="bed">
                    @if ($errors->has('bed'))
                      <span class="help-block">
                          <strong>{{ $errors->first('bed') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('sofa') ? ' has-error' : '' }}">
                    <label>Sofa no: </label>
                    <input class="form-control" type="text" name="sofa">
                    @if ($errors->has('sofa'))
                      <span class="help-block">
                          <strong>{{ $errors->first('sofa') }}</strong>
                      </span>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }}">
                    <label>Size </label>
                    <input class="form-control" type="text" name="size">
                    @if ($errors->has('size'))
                      <span class="help-block">
                          <strong>{{ $errors->first('size') }}</strong>
                      </span>
                    @endif
                  </div>


                  <div class="form-group {{ $errors->has('room_description') ? ' has-error' : '' }}">
                    <label>Descripion </label>
                    
                    <textarea class="form-control" type="text" name="room_description" ></textarea>
                    @if ($errors->has('room_description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('room_description') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="form-group">
                  	<label class="btn btn-default btn-file">
					            Browse Image<input type="file"  name="room_image">
				          	</label>
                  </div>	
                 <!-- end form-group -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-default">Add</button>
                  </div>

          <!-- end form-group -->
          
     
        </form>