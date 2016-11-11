<form class="booking-form" action="{{url('/room-check')}}" method="post">
  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                   
          <div class="form-group  {{ $errors->has('Check-In') ? ' has-error' : '' }}"  >
            <label>Check-In</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield" id="dpd1" name="Check-In">
             @if ($errors->has('Check-In'))
              <span class="help-block">
                    <strong>{{ $errors->first('Check-In') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group  {{ $errors->has('Check-Out') ? ' has-error' : '' }}">
            <label>Check-Out</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield"  id="dpd2" name="Check-Out">
             @if ($errors->has('Check-Out'))
              <span class="help-block">
                    <strong>{{ $errors->first('Check-Out') }}</strong>
              </span>
            @endif
          </div>
          <!-- end form-group -->
          <div class="form-group  {{ $errors->has('guest') ? ' has-error' : '' }}">
            <label>Guest</label>
            
            <input type="text" name="guest" >
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