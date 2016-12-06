<form class="booking-form" action="{{url('/room-check')}}" method="post">
  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                   
          <div class="form-group  {{ $errors->has('Check-In') ? ' has-error' : '' }}"  >
            <label>Check-In</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield" id="dpd1" name="Check-In" value="{{old('Check-In')}}">
             @if ($errors->has('Check-In'))
              <span class="help-block">
                    <strong>{{ $errors->first('Check-In') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group  {{ $errors->has('Check-Out') ? ' has-error' : '' }}">
            <label>Check-Out</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield"  id="dpd2" name="Check-Out" value="{{old('Check-Out')}}">
             @if ($errors->has('Check-Out'))
              <span class="help-block">
                    <strong>{{ $errors->first('Check-Out') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group  {{ $errors->has('guest') ? ' has-error' : '' }}">
            <label>Guest</label>
            <div class="select-box">
              <input type='text' name='guest' value='0' class='qty' />
              <span>Guest</span>
             
             <a class="dropdown-toggle select-arrow" data-toggle="dropdown" href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
              <div class="dropdown-menu" role="menu">
                <div class="qty-box"> 
                  <input type='button' value='+' class='qtyplus' field='guest' />
                  <input type='text' name='guest' value='0' class='qty' />
                  <input type='button' value='-' class='qtyminus' field='guest' />
                </div>
                <!-- end qty-box -->
                
                <!-- end qty-box --> 
              </div>
              <!-- end dropdown-menu --> 
            </div>
            
             @if ($errors->has('guest'))
              <span class="help-block">
                    <strong>{{ $errors->first('guest') }}</strong>
              </span>
            @endif
            <!-- end select-box --> 
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label class="hidden-xs">&nbsp;</label>
            <button type="submit" class="btn-orange-large">Check availability</button>
          </div>
          <!-- end form-group -->
        </form>