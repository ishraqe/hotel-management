@extends('layout.admin')
@section('title')
	Room type
@endsection
@section('content')
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         	Room types
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
      </div>
    </div>
  </div>


  <div class="panel panel-default" >
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Add new Room type
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
      
          <div class="panel-body">
            	    
          		<form action="#" method="post" id="">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
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

                 <!-- end form-group -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-orange-large">Add</button>
                  </div>

          <!-- end form-group -->
          
     
        </form>

          </div>
        </div>
   
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         	Uhhh
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
         
      </div>
    </div>
  </div>  
</div>

@endsection