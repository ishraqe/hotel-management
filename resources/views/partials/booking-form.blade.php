<form class="booking-form" action="{{url('/room-check')}}" method="post">
  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                   
          <div class="form-group"  >
            <label>Check-In</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield" id="dpd1" name="Check-In">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Check-Out</label>
            <input type="text" placeholder="Choose date" class="datepicker datefield"  id="dpd2" name="Check-Out">
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label>Guest</label>
            
            <input type="text" name="guest">
            <!-- end select-box --> 
          </div>
          <!-- end form-group -->
          <div class="form-group">
            <label class="hidden-xs">&nbsp;</label>
            <button type="submit" class="btn-orange-large">Check availability</button>
          </div>
          <!-- end form-group -->
        </form>